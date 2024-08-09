<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbsenceController;
use App\Http\Controllers\RetardController;

// Route pour la page d'accueil
Route::get('/', function () {
    return view('home'); // Accède à la vue 'home' dans 'resources/views'
})->name('app_home');

// Routes pour les absences (CRUD)
Route::resource('absences', AbsenceController::class);

// Routes pour les retards (CRUD)
Route::resource('retards', RetardController::class);
