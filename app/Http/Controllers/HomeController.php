<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Gallery;

class HomeController extends Controller
{

    public function index()
    {

        $projects = Project::latest()->get();

        $galleries = Gallery::latest()->get();


        return view('pages.home', [

            'projects'=>$projects,

            'galleries'=>$galleries,

            'title'=>'CV Sahabat Eksplorasi Banua | Konsultan Pertambangan dan Lingkungan',

            'description'=>'CV Sahabat Eksplorasi Banua menyediakan layanan konsultasi pertambangan, kajian teknis, survei, pemetaan, dan pengelolaan lingkungan.'

        ]);
    }

}