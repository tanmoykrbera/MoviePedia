<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\TvShowController;

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

//Route::get('/', function () {
    //return view('welcome');
//});

Route::get('/', [HomeController::class, 'home'])->name('Home');

Route::post('/searchMovie', [HomeController::class, 'searchMovie'])->name('searchMovie');

Route::get('/tvShow', function () {
    return view('search_movie');
});
Route::get('/movie', [\App\Http\Controllers\MovieController::class, 'listMovie' ]);
Route::get('/tv-show', [\App\Http\Controllers\TvShowController::class, 'listTvShow']);
Route::post('/searchTvShow', [TvShowController::class, 'searchTvShow'])->name('searchTvShow');




