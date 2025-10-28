<?php

// routes/web.php

use App\Http\Controllers\DogController;
use App\Http\Controllers\LitterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDogController;
use App\Http\Controllers\Admin\AdminLitterController;
use App\Http\Controllers\Admin\AdminLitterPhotoController;
use App\Models\Litter;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Public\DogController as PublicDogController;

Route::view('/', 'index')->name('home');
// Route::get('/', function () {
//     $litters = Litter::latest()->take(3)->get();
//     return view('public.home', compact('litters'));
// });
// Élevage
Route::view('/elevage/presentation', 'public.elevage.presentation');
Route::view('/elevage/valeurs', 'public.elevage.valeurs');
Route::get('/elevage/portees',  [LitterController::class, 'index'])->name('litters.index');
Route::get('/elevage/portees/{slug}', [LitterController::class, 'show'])->name('litters.show');


Route::get('/chiens',            [DogController::class, 'index'])->name('dogs.index');
Route::get('/chiens/femelles',   [DogController::class, 'femelles'])->name('dogs.femelles');
Route::get('/chiens/males',      [DogController::class, 'males'])->name('dogs.males');
Route::get('/chiens/{dog:slug}', [DogController::class, 'show'])->name('dogs.show');


// Pages publiques supplémentaires
Route::view('/elevage/pomsky', 'public.elevage.pomsky');
Route::view('/evenements', 'public.evenements');
Route::view('/temoignages', 'public.temoignages');
Route::view('/faq', 'public.faq')->name('faq');
Route::view('/galerie', 'public.galerie')->name('galerie');
Route::view('/reservation-tarifs', 'public.reservation-tarifs')->name('reservation.tarifs');

// (Réserver / Prix si tu veux)
Route::view('/elevage/reserver', 'public.elevage.reserver');
Route::view('/elevage/prix', 'public.elevage.prix');
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

Route::view('/contact', 'public.contact')->name('contact');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
Route::view('/en-construction', 'public.en-construction')->name('wip');
