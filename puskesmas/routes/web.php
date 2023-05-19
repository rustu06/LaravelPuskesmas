<?php

use App\Http\Controllers\PasienController;
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

// ruete untuk menampilkan daftar pasien 
route::get('/pasien', [PasienController::class, 'index']);

// Route untuk menampilkan form tambahan pasien
Route::get('/pasien/create', [PasienController::class, "create"]);

// Route untuk memperoses from tambahan 
Route::post('/pasien',  [pasienController::class, 'store']);
