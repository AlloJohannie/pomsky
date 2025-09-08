<?php

// routes/web.php

use App\Http\Controllers\DogController;
use App\Http\Controllers\LitterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDogController;
use App\Http\Controllers\Admin\AdminLitterController;
use App\Http\Controllers\Admin\AdminLitterPhotoController;

Route::view('/', 'public.home')->name('home');

// Élevage
Route::view('/elevage/presentation', 'public.elevage.presentation');
Route::view('/elevage/valeurs', 'public.elevage.valeurs');
Route::get('/elevage/femelles', [DogController::class, 'femelles'])->name('dogs.femelles');
Route::get('/elevage/males',    [DogController::class, 'males'])->name('dogs.males');
Route::get('/elevage/portees',  [LitterController::class, 'index'])->name('litters.index');
Route::get('/elevage/portees/{slug}', [LitterController::class, 'show'])->name('litters.show');
Route::view('/faq', 'public.faq')->name('faq');

// Zoothérapie
Route::view('/zootherapie/valeurs', 'public.zootherapie.valeurs');
Route::view('/zootherapie/services', 'public.zootherapie.services');
Route::view('/zootherapie/tarifs', 'public.zootherapie.tarifs');
Route::view('/zootherapie/partenaires', 'public.zootherapie.partenaires');

// Auth Breeze
require __DIR__.'/auth.php';

Route::middleware(['auth'])->group(function () {
    Route::view('/dashboard', 'admin.dashboard')->middleware('can:admin')->name('dashboard');

    Route::middleware('can:admin')->prefix('admin')->name('admin.')->group(function () {
        Route::resource('dogs', AdminDogController::class)->except(['show']);
        Route::resource('litters', AdminLitterController::class)->except(['show']);
        Route::post('litters/{litter}/photos', [AdminLitterPhotoController::class, 'store'])->name('litters.photos.store');
        Route::delete('litters/{litter}/photos/{photo}', [AdminLitterPhotoController::class, 'destroy'])->name('litters.photos.destroy');
    });
});