<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\ProkerController;
use App\Http\Controllers\PengurusController;
use App\Http\Controllers\DokumentasiController;



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

// Route::get('/', function () {
//     return view('index');
// });

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Divisi
Route::get('/divisi', [DivisiController::class, 'index'])->name('divisi');

// Kepengurusan
Route::get('/pengurus', [PengurusController::class, 'index'])->name('pengurus.index');
Route::get('/pengurus/create', [PengurusController::class, 'create'])->name('pengurus.create');
Route::post('/pengurus', [PengurusController::class, 'store'])->name('pengurus.store');
Route::get('/pengurus/{pengurus}/edit', [PengurusController::class, 'edit'])->name('pengurus.edit');
Route::put('/pengurus/{pengurus}', [PengurusController::class, 'update'])->name('pengurus.update');
Route::delete('/pengurus/{pengurus}', [PengurusController::class, 'destroy'])->name('pengurus.destroy');

// Proker
Route::resource('proker', ProkerController::class);

// Jadwal
Route::resource('jadwal', JadwalController::class);

// Dokumentasi
Route::get('/dokumentasi', [DokumentasiController::class, 'index'])->name('dokumentasi.index');
Route::get('/dokumentasi/create', [DokumentasiController::class, 'create'])->name('dokumentasi.create');
Route::post('/dokumentasi', [DokumentasiController::class, 'store'])->name('dokumentasi.store');
Route::get('/dokumentasi/{dokumentasi}/edit', [DokumentasiController::class, 'edit'])->name('dokumentasi.edit');
Route::put('/dokumentasi/{dokumentasi}', [DokumentasiController::class, 'update'])->name('dokumentasi.update');
Route::delete('/dokumentasi/{dokumentasi}', [DokumentasiController::class, 'destroy'])->name('dokumentasi.destroy');

// Login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/home', [HomeController::class, 'index'])->name('home');
