<?php

namespace App\Http\Controllers;

use App\Models\Project; // <-- 1. Import the Project model
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // This method will handle the '/projects' URL
    public function index()
    {
        // 2. Get all projects from the database, newest first
        $projects = Project::latest()->get();

        // 3. Send the data to a view file
        return view('projects.index', [
            'projects' => $projects
        ]);
    }

    // This method will handle the '/projects/{slug}' URL
    public function show(Project $project) // <-- 4. Laravel finds the project for us!
    {
        // 5. Send that single project's data to a view file
        return view('projects.show', [
            'project' => $project
        ]);
    }
}