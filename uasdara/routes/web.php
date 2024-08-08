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
use App\Models\MataKuliah;
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


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login-user', [App\Http\Controllers\UserController::class, 'login']);
Route::post('/login-user', [App\Http\Controllers\UserController::class, 'ceklogin'])->name('login-usser');

Route::middleware('auth:mahasiswa')->group(function () {
    Route::get('/db-mahasiswa', [App\Http\Controllers\UserController::class, 'index']);
});

Route::middleware(['auth'])->group(function () {
//data penjadwalan
Route::get('penjadwalan', [PenjadwalanController::class, 'index']);
Route::get('/penjadwalan/form/', [PenjadwalanController::class, 'create']);
Route::post('/penjadwalan/store/', [PenjadwalanController::class, 'store']);

Route::middleware(['CekAkses:admin'])->group(function () {
//data matakuliah
Route::get('matakuliah', [MataKuliahController::class, 'index']);
Route::get('/matakuliah/form/', [MataKuliahController::class, 'create']);
Route::post('/matakuliah/store/', [MataKuliahController::class, 'store']);
Route::get('/matakuliah/edit/{id}', [MataKuliahController::class, 'edit']);
Route::put('/matakuliah/{id}', [MataKuliahController::class, 'update']);
Route::delete('/matakuliah/{id}', [MataKuliahController::class, 'destroy']);

//data semester
Route::get('semester', [SemesterController::class, 'index']);
Route::get('/semester/form/', [SemesterController::class, 'create']);
Route::post('/semester/store/', [SemesterController::class, 'store']);

//data tahun ajar
Route::get('tahunajar', [TahunAjarController::class, 'index']);
Route::get('/tahunajar/form/', [TahunAjarController::class, 'create']);
Route::post('/tahunajar/store/', [TahunAjarController::class, 'store']);

//data dosen
Route::get('dosen', [DosenController::class, 'index']);
Route::get('/dosen/form/', [DosenController::class, 'create']);
Route::post('/dosen/store/', [DosenController::class, 'store']);
Route::get('/dosen/edit/{id}', [DosenController::class, 'edit']);
Route::put('/dosen/{id}', [DosenController::class, 'update']);
Route::delete('/dosen/{id}', [DosenController::class, 'destroy']);

//data mahasiswa
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/mahasiswa/form/', [MahasiswaController::class, 'create']);
Route::post('/mahasiswa/store/', [MahasiswaController::class, 'store']);
Route::get('/mahasiswa/edit/{id}', [MahasiswaController::class, 'edit']);
Route::put('/mahasiswa/{id}', [MahasiswaController::class, 'update']);
Route::delete('/mahasiswa/{id}', [MahasiswaController::class, 'destroy']);
});

});

