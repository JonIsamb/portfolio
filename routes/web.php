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

Route::get('/', [ProjetController::class, 'view'])->name('projet.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::resource('projets', ProjetController::class);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
