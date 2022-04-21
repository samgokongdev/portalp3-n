<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RikjalanController;
use App\Http\Controllers\RikselesaiController;
use App\Http\Controllers\PkmnpController;
use App\Http\Controllers\PkmdpController;
use App\Http\Controllers\PkmtotController;
use App\Http\Controllers\SkpterbitController;
use App\Http\Controllers\RdController;

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
Route::resource('home', HomeController::class);
Route::resource('rikjalan', RikjalanController::class);
Route::resource('rikselesai', RikselesaiController::class);
Route::resource('pkmnp', PkmnpController::class);
Route::resource('pkmdp', PkmdpController::class);
Route::resource('pkmtotal', PkmtotController::class);
Route::resource('skpterbit', SkpterbitController::class);
Route::resource('rd', RdController::class);

Route::get('/', function () {
    return view('welcome');
});
