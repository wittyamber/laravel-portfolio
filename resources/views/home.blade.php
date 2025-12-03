@extends('layouts.app')

@section('title', 'Welcome to My Portfolio')

@section('content')
    {{-- Hero Section --}}
    <div class="bg-white">
        <div class="container mx-auto px-8 py-24 text-center">
            <h1 class="text-5xl font-extrabold text-slate-900">Hi, I'm Juana Mae!</h1>
            <p class="mt-4 text-xl text-slate-600">A passionate Web Developer creating modern and responsive web applications.</p>
            <a href="{{ route('projects.index') }}" class="mt-8 inline-block bg-blue-600 text-white font-semibold px-8 py-3 rounded-lg hover:bg-blue-700 transition" data-aos="fade-up">View My Work</a>
        </div>
    </div>

    {{-- About Me Section --}}
    <section id="about" class="bg-white">
        <div class="container mx-auto px-8 py-20">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                
                {{-- Image Column --}}
                <div data-aos="fade-right">
                    <lottie-player 
                        src="{{ asset('animations/waving-animation.json') }}" 
                        background="transparent" 
                        speed="1" 
                        style="width: 100%; height: auto;" 
                        loop 
                        autoplay>
                    </lottie-player>
                </div>

                {{-- Text Column --}}
                <div data-aos="fade-left" data-aos-delay="200">
                    <h2 class="text-3xl font-bold text-slate-900 mb-4">About Me</h2>
                    <p class="text-slate-600 mb-4 text-lg">
                        I'm a passionate full-stack developer based in Philippines, with a love for building elegant solutions to complex problems. My journey into tech started with a simple "Hello, World!" and has grown into a deep fascination with creating seamless, user-friendly web applications.
                    </p>
                    <p class="text-slate-600 mb-4 text-lg">
                        I specialize in the Laravel ecosystem, using it to build robust backends. On the frontend, I'm proficient with Tailwind CSS for rapid and responsive design. I thrive in collaborative environments and am always eager to learn new technologies and grow as a developer.
                    </p>
                    <a href="#contact" class="mt-4 inline-block bg-blue-600 text-white font-semibold px-6 py-3 rounded-lg hover:bg-blue-700 transition">Get In Touch</a>
                </div>

            </div>
        </div>
    </section>

    {{-- Skills/Technologies Section --}}
    <section id="skills" class="bg-slate-100">
        <div class="container mx-auto px-8 py-20 text-center">
            <h2 class="text-3xl font-bold text-slate-900 mb-12" data-aos="fade-up">My Tech Stack</h2>
            
            <div class="flex flex-wrap justify-center gap-4">
                {{-- Edit this list with your own skills! --}}
                <div class="skill-badge" data-aos="fade-up" data-aos-delay="100">PHP</div>
                <div class="skill-badge" data-aos="fade-up" data-aos-delay="150">Laravel</div>
                <div class="skill-badge" data-aos="fade-up" data-aos-delay="200">JavaScript</div>
                <div class="skill-badge" data-aos="fade-up" data-aos-delay="250">MySQL</div>
                <div class="skill-badge" data-aos="fade-up" data-aos-delay="300">HTML5</div>
                <div class="skill-badge" data-aos="fade-up" data-aos-delay="350">CSS3</div>
                <div class="skill-badge" data-aos="fade-up" data-aos-delay="400">Tailwind CSS</div>
                <div class="skill-badge" data-aos="fade-up" data-aos-delay="450">Git & GitHub</div>
                {{-- Add or remove badges as needed --}}
            </div>
        </div>
    </section>

    {{-- Featured Projects Section --}}
    <div id="projects" class="container mx-auto p-8" data-aos="fade-up">
        <h2 class="text-3xl font-bold text-center mb-12">Featured Projects</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse ($featuredProjects as $project)
                <a href="{{ route('projects.show', $project) }}" class="block bg-white rounded-lg shadow-md p-6 hover:shadow-xl transition-all duration-300 hover:scale-105" data-aos="zoom-in">
                    <h3 class="text-xl font-semibold mb-2 text-slate-900">{{ $project->title }}</h3>
                    <p class="text-slate-600">{{ Str::limit($project->description, 100) }}</p>
                </a>
            @empty
                <p>No featured projects to display yet.</p>
            @endforelse
        </div>
    </div>

    {{-- Contact Section --}}
    <section id="contact" class="bg-white">
        <div class="container mx-auto px-8 py-20">
            <h2 class="text-3xl font-bold text-slate-900 text-center mb-12" data-aos="fade-up">Get In Touch</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                {{-- Left Column: The Form --}}
                <div data-aos="fade-right">
                    
                    {{-- Success Message --}}
                    @if(session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                            <span class="block sm:inline">{{ session('success') }}</span>
                        </div>
                    @endif

                    {{-- Add this block of HTML --}}
                    <p class="text-slate-600 text-lg mb-6">
                        Have a project in mind or just want to chat? Feel free to send me a message. I'm also active on social media!
                    </p>

                    {{-- Email Link --}}
                    <div class="flex items-center mb-4">
                        <a href="mailto:your-email@example.com" class="text-lg font-semibold text-blue-600 hover:underline">
                            bausingjuanamae@gmail.com
                        </a>
                    </div>

                    {{-- Social Links --}}
                    <div class="flex space-x-4 mb-8">
                        {{-- GitHub --}}
                        <a href="https://github.com/your-username" target="_blank" class="text-slate-500 hover:text-blue-600">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12c0 4.418 2.865 8.168 6.839 9.49.5.092.682-.217.682-.482 0-.237-.009-.868-.014-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.031-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.203 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.338 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.001 10.001 0 0022 12c0-5.523-4.477-10-10-10z" clip-rule="evenodd" /></svg>
                        </a>
                        {{-- LinkedIn --}}
                        <a href="https://linkedin.com/in/your-profile" target="_blank" class="text-slate-500 hover:text-blue-600">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" /></svg>
                        </a>
                    </div>

                    {{-- This horizontal line creates a nice separation --}}
                    <hr class="mb-8">

                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block text-slate-700 font-semibold mb-2">Name</label>
                            <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                            @error('name')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-slate-700 font-semibold mb-2">Email</label>
                            <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                            @error('email')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="message" class="block text-slate-700 font-semibold mb-2">Message</label>
                            <textarea id="message" name="message" rows="5" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
                            @error('message')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                        </div>
                        <div>
                            <button type="submit" class="bg-blue-600 text-white font-semibold px-6 py-3 rounded-lg hover:bg-blue-700 transition">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>

                {{-- Right Column: The Animation --}}
                <div data-aos="fade-left" data-aos-delay="200">
                    <lottie-player 
                        src="{{ asset('animations/contact-animation.json') }}" 
                        background="transparent" 
                        speed="1" 
                        style="width: 100%; height: auto;" 
                        loop 
                        autoplay>
                    </lottie-player>
                </div>
            </div>
        </div>
    </section>
@endsection