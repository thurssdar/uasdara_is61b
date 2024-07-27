<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PenjadwalanController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\TahunAjarController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\DosenController;
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
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('penjadwalan', [PenjadwalanController::class, 'index']);
Route::get('matakuliah', [PenjadwalanController::class, 'index']);
Route::get('semester', [PenjadwalanController::class, 'index']);
Route::get('tahunajar', [PenjadwalanController::class, 'index']);
Route::get('dosen', [PenjadwalanController::class, 'index']);
Route::get('mahasiswa', [PenjadwalanController::class, 'index']);
