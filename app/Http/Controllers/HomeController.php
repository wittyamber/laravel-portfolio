<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Get the 3 most recent projects to feature on the homepage
        $featuredProjects = Project::latest()->limit(3)->get();

        return view('home', [
            'featuredProjects' => $featuredProjects
        ]);
    }
}
