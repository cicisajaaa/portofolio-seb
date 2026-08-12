<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectPublicController extends Controller
{

    public function index()
    {

        $projects = Project::latest()->get();

        return view('pages.proyek', compact('projects'));

    }

}