<?php

use App\Http\Controllers\PagesController;
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

Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/galeri', [PagesController::class, 'galeri']);
Route::get('/kontak', [PagesController::class, 'kontak']);
Route::get('/cari-atlet', [PagesController::class, 'cari_atlet']);
Route::post('/cari-atlet', [PagesController::class, 'tampil_atlet']);
