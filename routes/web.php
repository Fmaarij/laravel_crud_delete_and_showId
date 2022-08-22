<?php

use App\Http\Controllers\HomeController;
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

//Affiche la page home
Route::get('/', [HomeController::class,'homePage']);
//crée des donées
Route::post('/create',[HomeController::class,'addCar']);
//supprime les données
Route::delete('/{id}/delete',[HomeController::class,'del']);
// Route::get('/crudEdit/{id}',[HomeController::class,'showId']);
