<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\HumasController;
use App\Http\Controllers\PembimbingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JurnalController;

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

Route::middleware(['auth'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/logout', [LoginController::class, 'logout']);

});

Route::middleware(['auth', 'humas'])->group(function () {
    Route::get('/humas', [HumasController::class, 'show']);
    Route::get('/pembimbing', [PembimbingController::class, 'show']);
    Route::get('/peserta', [PesertaController::class, 'show']);
    Route::get('/user', [UserController::class, 'index']);
    Route::get('/user/peserta_approve/{id}', [UserController::class, 'peserta_approve']);
    Route::get('/update', [UserController::class, 'edit']);
    Route::get('/update/{id}', [UserController::class, 'update'])->name('users.update');
    // Route::get('/user/{id}/edit', 'UserController@edit')->name('users.edit');
    // Route::patch('/user/{id}', 'UserController@update')->name('users.update');
    Route::delete('/delete/{id}', [UserController::class, 'delete']);
});

// Route::resource('peserta', PesertaController::class);
// Route::resource('daftar', DaftarController::class);
// Route::resource('login', LoginController::class);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('checklogin');
Route::post('/login/auth', [LoginController::class, 'auth']);
Route::get('/daftar/peserta', [PesertaController::class, 'index']);
Route::post('daftar/peserta/post', [PesertaController::class, 'daftar']);
Route::get('/daftar/humas', [HumasController::class, 'index']);
Route::post('/daftar/humas/post', [HumasController::class, 'daftar']);
Route::get('/daftar', [LoginController::class, 'daftar']);
Route::get('/daftar/pembimbing', [PembimbingController::class, 'index']);
Route::post('/daftar/pembimbing/post', [PembimbingController::class, 'daftar']);

