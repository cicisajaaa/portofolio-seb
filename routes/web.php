<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;

use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\ProjectPublicController;
use App\Http\Controllers\Admin\ProjectImportController;
use App\Models\Project;






/*
|--------------------------------------------------------------------------
| ADMIN PANEL
|--------------------------------------------------------------------------
*/
Route::middleware('auth')

->prefix('admin')

->group(function(){


    Route::get('/dashboard', function(){

        return view('admin.dashboard');

    })->name('admin.dashboard');




    // IMPORT EXCEL
    Route::get('/projects/import',
    [ProjectImportController::class,'index'])
    ->name('projects.import');



    Route::post('/projects/import',
    [ProjectImportController::class,'store'])
    ->name('projects.import.store');




    // PROJECT MANAGEMENT
    Route::resource('/projects', ProjectController::class);





    // Gallery Management

    Route::resource('/galleries', GalleryController::class);





    // Pesan Konsultasi

    Route::resource('/contacts', AdminContactController::class)

    ->only([

        'index',

        'destroy'

    ]);



});





/*
|--------------------------------------------------------------------------
| PROFILE
|--------------------------------------------------------------------------
*/


Route::middleware('auth')->group(function () {


    Route::get('/profile', [ProfileController::class, 'edit'])

    ->name('profile.edit');



    Route::patch('/profile', [ProfileController::class, 'update'])

    ->name('profile.update');



    Route::delete('/profile', [ProfileController::class, 'destroy'])

    ->name('profile.destroy');


});



/*
|--------------------------------------------------------------------------
| PUBLIC WEBSITE
|--------------------------------------------------------------------------
*/


Route::get('/', function () {

    $projects = Project::latest()->get();

    return view('pages.home', compact('projects'));

})->name('home');



Route::get('/tentang', function () {

    return view('pages.tentang');

})->name('tentang');



Route::get('/layanan', function () {

    return view('pages.layanan');

})->name('layanan');



Route::get('/proyek', [ProjectPublicController::class,'index'])

->name('proyek');



Route::get('/proyek/{id}', 
[ProjectPublicController::class,'show'])
->name('proyek.detail');


Route::get('/kontak', function () {

    return view('pages.kontak');

})->name('kontak');



Route::post('/kontak', [ContactController::class, 'store'])

->name('kontak.store');
require __DIR__.'/auth.php';