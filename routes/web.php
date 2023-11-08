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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/start',[\App\Http\Controllers\HomeController::class,'index'])->name('start');
Route::get('/home',[\App\Http\Controllers\HomeController::class,'home'])->name('home');
Route::get('/climate',[\App\Http\Controllers\HomeController::class,'climate'])->name('climat');
Route::get('/water',[\App\Http\Controllers\HomeController::class,'water'])->name('water');
Route::get('/air',[\App\Http\Controllers\HomeController::class,'air'])->name('air');
Route::get('/biodiversity',[\App\Http\Controllers\HomeController::class,'biodiversity'])->name('biodiversity');
Route::get('/resources',[\App\Http\Controllers\HomeController::class,'resources'])->name('resources');
Route::get('/thesoil',[\App\Http\Controllers\HomeController::class,'thesoil'])->name('thesoil');

