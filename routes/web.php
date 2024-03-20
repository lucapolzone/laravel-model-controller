<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class,'index'])->name('home');
Route::get('/contacts', [PageController::class,'contacts'])->name('contacts');

//index: pagina iniziale con la lista della risorsa
Route::get('/movies', [MovieController::class,'index'])->name('movies.index');

//show: ci da il dettaglio di una risorsa
Route::get('/movies/{id}', [MovieController::class, 'show'])->name('movies.show');

