<?php

use Illuminate\Support\Facades\Route;

// Public & General Controllers
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectPublicController;
use App\Http\Controllers\LegalitasController;
use App\Http\Controllers\HomeController;

// Models
use App\Models\Project;
use App\Models\Service;
use App\Models\Setting; // <-- Ditambahkan untuk memanggil Setting

// Admin Controllers
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\ProjectImportController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingController;

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
    Route::get('/projects/import', [ProjectImportController::class, 'index'])
         ->name('projects.import');

    Route::post('/projects/import', [ProjectImportController::class, 'store'])
         ->name('projects.import.store');

    // PROJECT MANAGEMENT
    Route::resource('/projects', ProjectController::class);

    // GALLERY MANAGEMENT
    Route::resource('/galleries', GalleryController::class);

    // SERVICE MANAGEMENT (LAYANAN)
    Route::resource('/services', ServiceController::class);

    // PESAN KONSULTASI
    Route::resource('/contacts', AdminContactController::class)
         ->only(['index', 'destroy']);

    // PENGATURAN WEBSITE
    Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');
    Route::put('/settings', [SettingController::class, 'update'])->name('settings.update');
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
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/tentang', function () {
    return view('pages.tentang');
})->name('tentang');

Route::get('/layanan', function () {
    $services = Service::latest()->get();
    return view('pages.layanan', compact('services'));
})->name('layanan');

Route::get('/proyek', [ProjectPublicController::class, 'index'])
     ->name('proyek');

Route::get('/proyek/{id}', [ProjectPublicController::class, 'show'])
     ->name('proyek.detail');

// <-- INI YANG DIPERBARUI, ROUTE KONTAK SEKARANG MENGAMBIL DATA SETTING -->
Route::get('/kontak', function () {
    $setting = Setting::pluck('value', 'key')->all();
    return view('pages.kontak', compact('setting'));
})->name('kontak');

Route::post('/kontak', [ContactController::class, 'store'])
     ->name('kontak.store');

Route::get('/legalitas', [LegalitasController::class, 'index'])
     ->name('legalitas');

require __DIR__.'/auth.php';