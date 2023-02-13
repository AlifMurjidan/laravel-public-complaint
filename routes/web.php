<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\MasyarakatController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth/login', function () {
    return view('/auth/login');
});

Route::get('/masyarakat/dashboard', function () {
    return view('/masyarakat/dashboard');
});

Route::get('/masyarakat/pengaduan', function () {
    return view('/masyarakat/pengaduan');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('auth');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route Masyarakat
Route::get('/masyarakat/pengaduan', [MasyarakatController::class, 'index'])->name('masyarakat.dashboard');
Route::get('/masyarakat/detail/{id_pengaduan}', [MasyarakatController::class, 'show'])->name('masyarakat.detail');
Route::get('/masyarakat/add', [MasyarakatController::class, 'create'])->name('masyarakat.create');
Route::post('/masyarakat', [MasyarakatController::class, 'store'])->name('masyarakat.store');
Route::get('/masyarakat/edit/{id_pengaduan}', [MasyarakatController::class, 'edit'])->name('masyarakat.edit');
Route::put('/masyarakat/{id_pengaduan}', [MasyarakatController::class, 'update']);
Route::delete('/masyarakat/delete/{id_pengaduan}', [MasyarakatController::class, 'destroy']);

// Route Petugas
Route::get('/petugas', [PetugasController::class, 'index'])->name('petugas.dashboard');
