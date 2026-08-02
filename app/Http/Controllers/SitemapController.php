<?php

namespace App\Http\Controllers;


use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use App\Models\Project;


class SitemapController extends Controller
{


    public function index()
    {


        $sitemap = Sitemap::create();



        // Halaman utama

        $sitemap->add(

            Url::create('/')

            ->setPriority(1.0)

        );




        // Halaman statis

        $sitemap->add(

            Url::create('/tentang')

            ->setPriority(0.8)

        );


        $sitemap->add(

            Url::create('/layanan')

            ->setPriority(0.8)

        );


        $sitemap->add(

            Url::create('/proyek')

            ->setPriority(0.9)

        );


        $sitemap->add(

            Url::create('/galeri')

            ->setPriority(0.7)

        );


        $sitemap->add(

            Url::create('/kontak')

            ->setPriority(0.8)

        );





        // Detail proyek dinamis

        $projects = Project::all();



        foreach($projects as $project){


            $sitemap->add(

                Url::create('/proyek/'.$project->id)

                ->setPriority(0.7)

            );


        }




        return $sitemap->toResponse(request());


    }


}