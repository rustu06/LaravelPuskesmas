<?php

use App\Http\Controllers\DeshboardController;
use App\Http\Controllers\PasienController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', [DeshboardController::class, 'index']) ->middleware('auth');

// ruete untuk menampilkan daftar pasien 
route::get('/pasien', [PasienController::class, 'index']) ->middleware('auth');

// Route untuk menampilkan form tambahan pasien
Route::get('/pasien/create', [PasienController::class, "create"]) ->middleware('auth');

// Route untuk memperoses from tambahan pasien 
Route::post('/pasien',  [pasienController::class, 'store']) ->middleware('auth');

//
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
