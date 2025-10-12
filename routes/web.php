<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjetController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/accueil', function () {
    return redirect()->route('home');
});

Route::get('/a_propos', function () {
    return view('a_propos');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/competences', function () {
    return view('competences');
});

Route::get('/experiences', function () {
    return view('experiences');
});

Route::get('/formations', function () {
    return view('formations');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/cv', function () {
    return view('cv');
});

Route::get('/boids', function () {
    return view('boids');
});

Route::get('/projects/chronos', function () {
    return view('chronos');
});

Route::get('/projects/boids', function () {
    return view('boids');
});

Route::get('/projects/marathon', function () {
    return view('marathon');
});

Route::get('/projects/fractales', function () {
    return view('fractales');
});

Route::get('/mobile', function () {
    return view('mobile');
})->name('mobile');