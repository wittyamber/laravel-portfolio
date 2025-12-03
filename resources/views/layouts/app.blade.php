<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- The @yield directive will be replaced by the content of other pages --}}
    <title>@yield('title', 'My Awesome Portfolio')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-100 text-slate-800">

    <nav class="fixed top-0 w-full z-50 bg-white shadow-md">
        <div class="container mx-auto px-8 py-4 flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-2xl font-bold text-slate-900">JuanaMae</a>
            <div>
                <a href="{{ route('home') }}" class="text-slate-700 hover:text-blue-600 px-3 py-2">Home</a>
                <a href="{{ route('home') }}#about" class="text-slate-700 hover:text-blue-600 px-3 py-2">About</a>
                <a href="{{ route('home') }}#skills" class="text-slate-700 hover:text-blue-600 px-3 py-2">Skills</a>
                <a href="{{ route('projects.index') }}" class="text-slate-700 hover:text-blue-600 px-3 py-2">Projects</a>
                <a href="{{ route('certificates.index') }}" class="text-slate-700 hover:text-blue-600 px-3 py-2">Certificates</a>
                <a href="{{ route('home') }}#contact" class="text-slate-700 hover:text-blue-600 px-3 py-2">Contact</a>
            </div>
        </div>
    </nav>

    <main class="pt-20">
        {{-- This is where the specific page content will go --}}
        @yield('content')
    </main>

</body>
</html>