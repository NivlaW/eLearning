<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageGuruController;
use App\Http\Controllers\muridcontroller;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\TugasController;

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

Route::get('/', [AuthController::class, 'showGuruLogin']);
Route::get('/login/guru', [AuthController::class, 'showGuruLogin'])->name('login');
Route::post('/login', [AuthController::class, 'guruLogin']);
Route::get('/guru', [PageGuruController::class, 'index']);
Route::get('/murid', [muridcontroller::class, 'index']);
Route::get('/murid/kelas', [muridcontroller::class, 'muridkelas']);
Route::get('/murid/kelas/{kelas}', [muridcontroller::class, 'showmuridkelas']);
Route::get('/murid/kelas/{kelas}/tugas/{tugas}', [TugasController::class, 'showmrd']);
Route::get('/murid/kelas/{kelas}/materi/{materi}', [MateriController::class, 'showmrd']);
Route::get('/guru/kelas', [PageGuruController::class, 'showListKelas']);
Route::get('/guru/kelas/{kelas}', [PageGuruController::class, 'showKelas']);
Route::post('/guru/kelas/{kelas}/materi/create', [PageGuruController::class, 'storeMateri']);
Route::post('/guru/kelas/{kelas}/tugas/create', [PageGuruController::class, 'storeTugas']);
Route::get('/guru/kelas/{kelas}/tugas/{tugas}', [TugasController::class, 'show']);
Route::get('/guru/kelas/{kelas}/materi/{materi}', [MateriController::class, 'show']);
Route::patch('/guru/kelas/{kelas}/materi/{materi}', [MateriController::class, 'update']);
Route::delete('/guru/kelas/{kelas}/materi/{materi}', [MateriController::class, 'destroy']);