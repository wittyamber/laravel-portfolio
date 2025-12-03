@extends('layouts.app')

@section('title', 'My Projects')

@section('content')
    <div class="container mx-auto p-8">
        {{-- I've added an animation to your title as well! --}}
        <h1 class="text-4xl font-bold mb-8" data-aos="fade-down">My Work</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            {{-- This is your Blade loop, which is already perfect. --}}
            @forelse ($projects as $project)
                <a href="{{ route('projects.show', $project) }}" class="block bg-white rounded-lg shadow-md p-6 hover:shadow-xl transition-all duration-300 hover:scale-105" data-aos="fade-up">
                    <h2 class="text-2xl font-semibold mb-2 text-slate-900">{{ $project->title }}</h2>
                    <p class="text-slate-600">{{ Str::limit($project->description, 100) }}</p>
                </a>
            @empty
                <p>No projects to display yet!</p>
            @endforelse
        </div>
    </div>
@endsection