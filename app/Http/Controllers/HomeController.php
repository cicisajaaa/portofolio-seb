<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Gallery;
use App\Models\Service; // 1. Tambahkan baris ini di atas

class HomeController extends Controller
{

    public function index()
    {

        $projects = Project::latest()->get();

        $galleries = Gallery::latest()->get();

        $services = Service::latest()->get(); // 2. Ambil data layanan dari database


        return view('pages.home', [

            'projects' => $projects,

            'galleries' => $galleries,

            'services' => $services, // 3. Kirim variabel services ke view

            'title' => 'CV Sahabat Eksplorasi Banua | Konsultan Pertambangan dan Lingkungan',

            'description' => 'CV Sahabat Eksplorasi Banua menyediakan layanan konsultasi pertambangan, kajian teknis, survei, pemetaan, dan pengelolaan lingkungan.'

        ]);
    }

}