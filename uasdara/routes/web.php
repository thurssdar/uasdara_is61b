<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PenjadwalanController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\TahunAjarController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\DosenController;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Semester;
use App\Models\TahunAjar;

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
Route::get('matakuliah', [MataKuliahController::class, 'index']);
Route::get('semester', [SemesterController::class, 'index']);
Route::get('tahunajar', [TahunAjarController::class, 'index']);
Route::get('dosen', [DosenController::class, 'index']);
Route::get('mahasiswa', [MahasiswaController::class, 'index']);


