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

Route::get('/petugas/dashboard', function () {
    return view('/petugas/dashboard');
});

// Route::get('/petugas/masyarakat', function () {
//     return view('/petugas/masyarakat');
// });

Route::get('/petugas/admin', function () {
    return view('/petugas/admin');
});

Route::get('/petugas/report', function () {
    return view('/petugas/report');
});

// Route Auth
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register', [AuthController::class, 'register_action'])->name('register.action');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('auth');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route Masyarakat
Route::get('/masyarakat/', [MasyarakatController::class, 'index'])->name('masyarakat.dashboard');
Route::get('/masyarakat/pengaduan', [MasyarakatController::class, 'tampilpengaduan'])->name('masyarakat.pengaduan');
Route::get('/masyarakat/detail/{id_pengaduan}', [MasyarakatController::class, 'show'])->name('masyarakat.detail');
Route::get('/masyarakat/add', [MasyarakatController::class, 'create'])->name('masyarakat.create');
Route::post('/masyarakat', [MasyarakatController::class, 'store'])->name('masyarakat.store');
Route::get('/masyarakat/edit/{id_pengaduan}', [MasyarakatController::class, 'edit'])->name('masyarakat.edit');
Route::put('/masyarakat/{id_pengaduan}', [MasyarakatController::class, 'update']);
Route::delete('/masyarakat/delete/{id_pengaduan}', [MasyarakatController::class, 'destroy']);

// Route Petugas
Route::get('/petugas/', [PetugasController::class, 'index'])->name('petugas.dashboard');
Route::get('/petugas/report', [PetugasController::class, 'tampilpengaduan'])->name('petugas.report');
// Route::get('/cetak_pdf', [PetugasController::class, 'cetak_pdf'])->name('report.pdf');
Route::get('/petugas/admin', [PetugasController::class, 'tampiladmin'])->name('petugas.admin');
Route::get('/petugas/masyarakat', [PetugasController::class, 'tampilmasyarakat'])->name('petugas.masyarakat');
Route::get('/petugas/edit/{id_pengaduan}', [PetugasController::class, 'edit'])->name('petugas.edit');
Route::put('/petugas/{id_pengaduan}', [PetugasController::class, 'update']);
Route::delete('/petugas/delete/{id_pengaduan}', [PetugasController::class, 'destroy']);
Route::delete('/petugas/deleteadmin/{id_petugas}', [PetugasController::class, 'deleteadmin']);
Route::delete('/petugas/deletemasyarakat/{nik}', [PetugasController::class, 'deletemasyarakat']);