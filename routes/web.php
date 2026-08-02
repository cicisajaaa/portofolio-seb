<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Models\Project;
use App\Models\Gallery;
use App\Http\Controllers\ContactController;

use App\Http\Controllers\SitemapController;

/*
|--------------------------------------------------------------------------
| Halaman Beranda
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index']);



/*
|--------------------------------------------------------------------------
| Detail Proyek
|--------------------------------------------------------------------------
*/

Route::get('/proyek', function(){

    $projects = Project::latest()->get();

    return view('pages.proyek', compact('projects'));

});

Route::get('/proyek/{id}', function ($id) {

    $project = Project::findOrFail($id);

    return view('pages.detail-proyek', [
        'project' => $project
    ]);

});



/*
|--------------------------------------------------------------------------
| Tentang Kami
|--------------------------------------------------------------------------
*/

Route::get('/tentang', function(){

    return view('pages.tentang', [

        'title'=>'Tentang Kami | CV Sahabat Eksplorasi Banua',

        'description'=>'Profil CV Sahabat Eksplorasi Banua sebagai perusahaan konsultan pertambangan dan lingkungan.'

    ]);

});
/*
|--------------------------------------------------------------------------
| Layanan Kami
|--------------------------------------------------------------------------
*/

Route::get('/layanan', function () {

    return view('pages.layanan');

});

/*
|--------------------------------------------------------------------------
| Galeri
|--------------------------------------------------------------------------
*/


Route::get('/galeri', function () {

    $galleries = Gallery::latest()->get();


    return view('pages.galeri', compact('galleries'));

});

/*
|--------------------------------------------------------------------------
| Kontak
|--------------------------------------------------------------------------
*/

Route::get('/kontak', function () {

    return view('pages.kontak');

});



Route::post('/kontak',
[ContactController::class,'store'])
->name('kontak.store');


Route::get('/sitemap.xml',
[SitemapController::class,'index']);