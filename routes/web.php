<?php

// routes/web.php

use App\Http\Controllers\DogController;
use App\Http\Controllers\LitterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDogController;
use App\Http\Controllers\Admin\AdminLitterController;
use App\Http\Controllers\Admin\AdminLitterPhotoController;
use App\Models\Litter;

Route::view('/', 'index')->name('home');
// Route::get('/', function () {
//     $litters = Litter::latest()->take(3)->get();
//     return view('public.home', compact('litters'));
// });
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
    Route::get('/dashboard', fn () => redirect('/admin'))->name('dashboard');
});

