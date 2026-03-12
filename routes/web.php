<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PersonneController;
use App\Http\Controllers\VueJSController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('accueil', function () {
    return view('accueil.index');
})->name('accueil.index');

Route::get('/vuejs.index', [VueJSController::class, 'index'])->name('vueJS.index');

Route::resource('personnes', PersonneController::class);

require __DIR__ . '/auth.php';