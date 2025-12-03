<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $project->title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-100 text-slate-800">

    <div class="container mx-auto p-8">
        <a href="{{ route('projects.index') }}" class="text-blue-600 hover:underline mb-8 block">&larr; Back to all projects</a>

        <h1 class="text-4xl font-bold mb-4">{{ $project->title }}</h1>
        
        <div class="bg-white rounded-lg shadow-md p-8">
            <p class="text-lg text-slate-700 mb-6">{{ $project->description }}</p>

            <div class="mb-6">
                <h3 class="text-xl font-semibold mb-2">Technologies Used</h3>
                <div class="flex flex-wrap gap-2">
                    @foreach (j$project->technologies as $tech)
                        <span class="bg-slate-200 text-slate-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded">{{ $tech }}</span>
                    @endforeach
                </div>
            </div>

            <div class="flex space-x-4">
                <a href="{{ $project->project_url }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Live Site</a>
                <a href="{{ $project->repo_url }}" class="bg-gray-800 text-white px-4 py-2 rounded hover:bg-gray-900 transition">Source Code</a>
            </div>
        </div>
    </div>

</body>
</html>