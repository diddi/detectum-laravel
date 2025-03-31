<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Hoofdpagina
Route::get('/', function () {
    return view('pages.home');
})->name('home');

// Informatie pagina's
Route::get('/over-detectum', function () {
    return view('pages.over-detectum');
})->name('over-detectum');

Route::get('/voor-vrijwilligers', function () {
    return view('pages.voor-vrijwilligers');
})->name('voor-vrijwilligers');

Route::get('/wetgeving-richtlijnen', function () {
    return view('pages.wetgeving-richtlijnen');
})->name('wetgeving-richtlijnen');

Route::get('/vondsten-melden', function () {
    return view('pages.vondsten-melden');
})->name('vondsten-melden');

// Activiteiten
Route::get('/activiteiten', function () {
    return view('pages.activiteiten');
})->name('activiteiten');

// Kennisbank en nieuws
Route::get('/kennisbank', function () {
    return view('pages.kennisbank');
})->name('kennisbank');

Route::get('/nieuws', function () {
    return view('pages.nieuws');
})->name('nieuws');

// Nieuws detail pagina
Route::get('/nieuws/{id}', function ($id) {
    // Hier zou je normaal gesproken een nieuwsartikel ophalen uit de database
    return view('pages.nieuws-detail', ['id' => $id]);
})->name('nieuws.show');

// Contact
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

// Footer pagina's
Route::get('/privacy', function () {
    return view('pages.privacy');
})->name('privacy');

Route::get('/cookies', function () {
    return view('pages.cookies');
})->name('cookies');

Route::get('/disclaimer', function () {
    return view('pages.disclaimer');
})->name('disclaimer');

// Tijdelijke authenticatie routes (zonder functionaliteit)
Route::get('/login', function () {
    return view('pages.login');
})->name('login');

Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->name('dashboard');

// Test route
Route::get('/test', function () {
    return 'Laravel routing werkt!';
});

// Commentaar de auth.php require uit als dat nog niet is gedaan
// require __DIR__.'/auth.php';
