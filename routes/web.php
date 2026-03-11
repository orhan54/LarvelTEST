<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonneController;
use App\Http\Controllers\VueJSController; // ← manquait
use App\Models\Personne;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('accueil', function () {
    return view('accueil.index');
})->name('accueil.index');

Route::get('/vuejs.index', [VueJSController::class, 'index'])->name('vueJS.index');

Route::resource('personnes', PersonneController::class);
