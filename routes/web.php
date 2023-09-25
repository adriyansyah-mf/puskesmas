<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\ProgramValueController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EvaluasiController;
use App\Http\Controllers\IndicatorController;
use App\Http\Controllers\LaporanKinerjaController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\LokmunNotulenController;
use App\Http\Controllers\RescheduleController;
use App\Models\Jadwal;
use App\Models\Reschedule;

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

// auth

Route::get('/login', [LoginController::class, 'index']) ->name('login') -> middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/logout', [LoginController::class, 'logout'])-> middleware('auth');

// user

Route::get('/user', [UserController::class, 'index']) -> middleware('admin');

Route::post('/user', [UserController::class, 'store'])-> middleware('admin');

Route::get('/user/{id}/edit', [UserController::class, 'edit'])-> middleware('admin');

Route::put('/user/{id}', [UserController::class, 'update'])-> middleware('admin');

Route::delete('user/{id}', [UserController::class, 'delete'])-> middleware('admin');

//content

Route::get('/', [DashboardController::class, 'index']) -> middleware('auth');

Route::get('/about', [AboutController::class, 'index']) -> middleware('auth');

// spm

Route::get('/spm/{spm}', [ProgramValueController::class, 'index']) -> middleware('auth');

Route::get('/spm/{id}/edit', [ProgramValueController::class, 'edit'])-> middleware('auth');

Route::get('/spm/coba/{slug}', [ProgramValueController::class, 'show'])-> middleware('auth');

Route::get('/spm/filter/{program}/{year}/{id_indicator}', [ProgramValueController::class, 'filter'])-> middleware('auth');

Route::get('/spm/edit/{program}/{year}/{id_indicator}', [ProgramValueController::class, 'edit'])-> middleware('auth');

Route::put('/spm/update/{program}/{year}/{indicator}', [ProgramValueController::class, 'update'])-> middleware('auth');

Route::post('/indicator/{slug}', [IndicatorController::class, 'store'])-> middleware('auth');

// evaluasi capaian

Route::get('eval/{prog}', [EvaluasiController::class, 'index'])-> middleware('auth');

Route::post('eval/filter/{prog}', [EvaluasiController::class, 'filter'])-> middleware('auth');

Route::post('/eval/{prog}/{year}/{month}', [EvaluasiController::class, 'add'])-> middleware('auth');

Route::put('/eval/{prog}', [EvaluasiController::class, 'update'])->name('eval.update')-> middleware('auth');

Route::delete('eval/delete/{prog}', [EvaluasiController::class, 'delete'])->name('eval.delete')-> middleware('auth');

// report

Route::get('report/{prog}', [LaporanKinerjaController::class, 'index'])-> middleware('auth');

Route::post('report/{prog}/{year}/{month}', [LaporanKinerjaController::class, 'add'])-> middleware('auth');

Route::put('report', [LaporanKinerjaController::class, 'update'])->name('report.update')-> middleware('auth');

Route::get('report/{prog}/{year}/{month}', [LaporanKinerjaController::class, 'filter'])-> middleware('auth');

Route::delete('report/delete', [LaporanKinerjaController::class, 'delete'])->name('report.delete')-> middleware('auth');

// lokmun

Route::get('lokmun/{prog}', [LokmunNotulenController::class, 'index']);

Route::post('/image-upload', [LokmunNotulenController::class, 'uploadImage'])->name('upload.image');
Route::delete('lokmun/delete', [LokmunNotulenController::class, 'deleteImage'])->name('delete.image');


// load image

Route::get('public/uploads/lokmun/{name}', [LokmunNotulenController::class, 'getImage'])->name('get.image');



// jadwal

Route::get('jadwal/{prog}', [JadwalController::class, 'index'])-> middleware('auth');

Route::get('jadwal/{prog}/{year}/{month}', [JadwalController::class, 'filter'])-> middleware('auth');

Route::post('jadwal/{prog}/{year}/{month}', [JadwalController::class, 'add'])-> middleware('auth');

Route::put('jadwal/{prog}//{year}/{month}', [JadwalController::class, 'update'])->name('jadwal.update')-> middleware('auth');

Route::delete('jadwal/delete/{prog}', [JadwalController::class, 'delete'])->name('jadwal.delete')-> middleware('auth');

// reschedule

Route::get('reschedule/{prog}', [RescheduleController::class, 'index'])-> middleware('auth');

Route::post('reschedule/{prog}', [RescheduleController::class, 'add'])-> middleware('auth');

Route::put('reschedule/{prog}', [RescheduleController::class, 'update'])->name('reschedule.update')-> middleware('auth');

Route::delete('reschedule/delete/{prog}', [RescheduleController::class, 'delete'])->name('reschedule.delete')-> middleware('auth');