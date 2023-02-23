<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
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
    return view('/auth/login');
})->middleware('auth');

Route::get('/auth/login', function () {
    return view('/auth/login');
});

Route::get('/masyarakat/dashboard', function () {
    return view('/masyarakat/dashboard');
})->middleware('auth');

Route::get('/masyarakat/pengaduan', function () {
    return view('/masyarakat/pengaduan');
})->middleware('auth');

Route::get('/petugas/dashboard', function () {
    return view('/petugas/dashboard');
})->middleware(['auth','only-petugas']);

// Route::get('/petugas/masyarakat', function () {
//     return view('/petugas/masyarakat');
// });

Route::get('/petugas/admin', function () {
    return view('/petugas/admin');
})->middleware(['auth','only-petugas']);

Route::get('/petugas/report', function () {
    return view('/petugas/report');
})->middleware(['auth','only-petugas']);

// Route Auth
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register', [AuthController::class, 'register_action'])->name('register.action');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('auth');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Route Masyarakat
Route::get('/masyarakat/', [MasyarakatController::class, 'index'])->name('masyarakat.dashboard')->middleware(['auth','only-masyarakat']);
Route::get('/masyarakat/pengaduan', [MasyarakatController::class, 'tampilpengaduan'])->name('masyarakat.pengaduan')->middleware(['auth','only-masyarakat']);
Route::get('/masyarakat/detail/{id_pengaduan}', [MasyarakatController::class, 'show'])->name('masyarakat.detail')->middleware(['auth','only-masyarakat']);
Route::get('/masyarakat/add', [MasyarakatController::class, 'create'])->name('masyarakat.create')->middleware(['auth','only-masyarakat']);
Route::post('/masyarakat', [MasyarakatController::class, 'store'])->name('masyarakat.store')->middleware(['auth','only-masyarakat']);
Route::get('/masyarakat/edit/{id_pengaduan}', [MasyarakatController::class, 'edit'])->name('masyarakat.edit')->middleware(['auth','only-masyarakat']);
Route::put('/masyarakat/{id_pengaduan}', [MasyarakatController::class, 'update'])->middleware(['auth','only-masyarakat']);
Route::delete('/masyarakat/delete/{id_pengaduan}', [MasyarakatController::class, 'destroy'])->middleware(['auth','only-masyarakat']);

// Route Petugas
Route::get('/petugas/', [PetugasController::class, 'index'])->name('petugas.dashboard')->middleware(['auth','only-petugas']);
Route::get('/petugas/report', [PetugasController::class, 'tampilpengaduan'])->name('petugas.report')->middleware(['auth','only-petugas']);
Route::get('pdf', [PetugasController::class, 'print'])->name('print')->middleware(['auth','only-petugas','must-admin']);

Route::get('/petugas/tanggapan{id_pengaduan}', [PetugasController::class, 'tanggapan'])->name('petugas.tanggapan')->middleware(['auth','only-petugas']);
Route::post('/petugas', [PetugasController::class, 'tanggapans'])->name('petugas.tanggapans')->middleware(['auth','only-petugas']);

Route::get('/petugas/admin', [PetugasController::class, 'tampiladmin'])->name('petugas.admin')->middleware(['auth','only-petugas','must-admin']);
Route::get('/petugas/masyarakat', [PetugasController::class, 'tampilmasyarakat'])->name('petugas.masyarakat')->middleware(['auth','only-petugas']);
Route::get('/petugas/edit/{id_pengaduan}', [PetugasController::class, 'edit'])->name('petugas.edit')->middleware(['auth','only-petugas']);
Route::put('/petugas/{id_pengaduan}', [PetugasController::class, 'update'])->middleware(['auth','only-petugas']);
Route::delete('/petugas/delete/{id_pengaduan}', [PetugasController::class, 'destroy'])->middleware(['auth','only-petugas']);
Route::delete('/petugas/deleteadmin/{id_petugas}', [PetugasController::class, 'deleteadmin'])->middleware(['auth','only-petugas','must-admin']);
Route::delete('/petugas/deletemasyarakat/{nik}', [PetugasController::class, 'deletemasyarakat'])->middleware(['auth','only-petugas']);