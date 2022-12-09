<?php

use App\Http\Controllers\Today;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;

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
/*
Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('/tous', [FirstController::class, 'tous']);
Route::get('/film/{idFilm}', [FirstController::class, 'film']);
Route::get('/personnage/{idActeur}', [FirstController::class, 'personne']);
Route::get('/ajoutfilm', [FirstController::class, 'ajoutfilm']);
Route::get('/ajoutreal', [FirstController::class, 'ajoutreal']);


Route::post('/ajoutfilmT', [FirstController::class, 'ajoutfilmT']);
Route::post('/ajoutrealT', [FirstController::class, 'ajoutrealT']);

Route::get('/livre/{idLivre}', [FirstController::class, 'afficherLivre'])->where('idLivre','[0-9]+');
*/


Route::get('/', [Today::class, 'index']);

Route::get('/private', [Today::class, 
    'private'])->middleware('auth');

Route::get('/item', [Today::class, 
    'item'])->middleware('auth')->name('item');
Route::post('/item', [Today::class, 
    'storeitem'])->middleware('auth')->name('routeitem');