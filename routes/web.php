<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\KepengurusanController;



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

// home
Route::get('/', [HomeController::class, 'index'])->name('home');

//divisi
Route::get('/divisi/bph', [DivisiController::class, 'bph'])->name('divisi.bph');
Route::get('/divisi/psdm', [DivisiController::class, 'psdm'])->name('divisi.psdm');
Route::get('/divisi/sosma', [DivisiController::class, 'sosma'])->name('divisi.sosma');
Route::get('/divisi/kwu', [DivisiController::class, 'kwu'])->name('divisi.kwu');
Route::get('/divisi/humas', [DivisiController::class, 'humas'])->name('divisi.humas');
Route::get('/divisi/multimedia', [DivisiController::class, 'multimedia'])->name('divisi.multimedia');

// organisasi
Route::get('/kepengurusan', [KepengurusanController::class, 'index'])->name('kepengurusan');

//dokumentasi
Route::get('/dokumentasi', 'App\Http\Controllers\DokumentasiController@index')->name('dokumentasi');
