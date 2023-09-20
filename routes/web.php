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
use App\Http\Controllers\LokmunNotulenController;

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

Route::get('/logout', [LoginController::class, 'logout']);

// user

Route::get('/user', [UserController::class, 'index']) -> middleware('admin');

Route::post('/user', [UserController::class, 'store']);

Route::get('/user/{id}/edit', [UserController::class, 'edit']);

Route::put('/user/{id}', [UserController::class, 'update']);

Route::delete('user/{id}', [UserController::class, 'delete']);

//content

Route::get('/', [DashboardController::class, 'index']) -> middleware('auth');

Route::get('/about', [AboutController::class, 'index']) -> middleware('auth');

// spm

Route::get('/spm/{spm}', [ProgramValueController::class, 'index']) -> middleware('auth');

Route::get('/spm/{id}/edit', [ProgramValueController::class, 'edit']);

Route::get('/spm/coba/{slug}', [ProgramValueController::class, 'show']);

Route::get('/spm/filter/{program}/{year}/{id_indicator}', [ProgramValueController::class, 'filter']);

Route::get('/spm/edit/{program}/{year}/{id_indicator}', [ProgramValueController::class, 'edit']);

Route::put('/spm/update/{program}/{year}/{indicator}', [ProgramValueController::class, 'update']);

Route::post('/indicator/{slug}', [IndicatorController::class, 'store']);

// evaluasi capaian

Route::get('eval/{prog}', [EvaluasiController::class, 'index']);

Route::post('eval/filter/{prog}', [EvaluasiController::class, 'filter']);

Route::post('/eval/{prog}/{year}/{month}', [EvaluasiController::class, 'add']);

Route::put('/eval/{prog}/{id}', [EvaluasiController::class, 'update'])->name('eval.gizi.update');

// report

Route::get('report/{prog}', [LaporanKinerjaController::class, 'index']);

Route::post('report/{prog}/{year}/{month}', [LaporanKinerjaController::class, 'add']);

Route::put('report/{prog}/{id}/{year}/{month}', [LaporanKinerjaController::class, 'update'])->name('report.update');

Route::get('report/{prog}/{year}/{month}', [LaporanKinerjaController::class, 'filter']);

Route::delete('report/delete/{id}/{prog}', [LaporanKinerjaController::class, 'delete'])->name('report.delete');

// lokmun
Route::get('lokmun/{prog}', [LokmunNotulenController::class, 'index']);
Route::post('/image-upload', [LokmunNotulenController::class, 'uploadImage'])->name('upload.image');


// load image

Route::get('public/uploads/lokmun/{name}', [LokmunNotulenController::class, 'getImage'])->name('get.image');

// Route::post('upload/lokmun/{prog}', [LokmunNotulenController::class, 'uploadImage'])->name('upload.image');