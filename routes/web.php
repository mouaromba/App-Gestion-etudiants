<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;

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

Route::get('formulaire', [EtudiantController::class, 'create'])->name('formulaire');
Route::get('/', [EtudiantController::class, 'accueil']);
Route::post('insertion', [EtudiantController::class, 'store'])->name('insertion');
Route::get('liste', [EtudiantController::class, 'index'])->name('liste');