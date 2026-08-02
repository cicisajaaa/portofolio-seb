<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends Controller
{

    public function show($id)
    {

        $project = Project::findOrFail($id);


        return view(
            'pages.detail-proyek',
            compact('project')
        );

    }

}