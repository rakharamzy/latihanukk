<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\PelanggaranController;
use App\Http\Controllers\tanggapanController;
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
//     return view('welcome');
// });

Route::middleware(['guest'])->group(function(){
    Route::get('/login', [SesiController::class,'index'])->name('login');
    Route::post('/login', [SesiController::class,'login']);
    Route::get('/', [HomeController::class,'index']);
    Route::get('/', [HomeController::class, 'search'])->name('search');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/guru', [GuruController::class, 'index']);
    Route::get('/logout',[SesiController::class,'logout']);
    Route::group(['middleware' => ['cekUser:admin']], function () {
        Route::get('/admin', [AdminController::class,'index']);
        Route::resource('/admin/siswa',SiswaController::class);
        Route::resource('/admin/petugas',PetugasController::class);
        Route::resource('/admin/pelanggaran',PelanggaranController::class);
        Route::resource('/admin/tanggapan',tanggapanController::class);
        });
        Route::group(['middleware' => ['cekUser:gurubk']], function () {
        Route::get('/guru', [GuruController::class,'index']);
    });
});