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
use App\Http\Controllers\GiziRapatController;
use App\Http\Controllers\keslingRapatController;
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

Route::get('lokmun/{prog}/{view_name}', [LokmunNotulenController::class, 'index'])->middleware('auth')->where('type', 'kesling_lokmun_notulen');

Route::post('/image-upload/{prog}', [LokmunNotulenController::class, 'uploadImage'])->name('upload.image')->middleware('auth');

Route::delete('lokmun/delete', [LokmunNotulenController::class, 'deleteImage'])->name('delete.image')->middleware('auth');




// gizi rapat
Route::get('rapat/gizi/dokumentasi', [GiziRapatController::class, 'index'])->middleware('auth');

Route::post('/image-upload/gizi/dokumentasi', [GiziRapatController::class, 'uploadImage'])->name('uploadimage.dokumentasigizi')->middleware('auth');

Route::delete('rapat/gizi/dokumentasi/delete', [GiziRapatController::class, 'deleteImageDokumentasiGizi'])->name('deleteimage.dokumentasigizi')->middleware('auth');

Route::get('rapat/gizi/notulen', [GiziRapatController::class, 'IndexNotulen'])->name('indexnotulengizi')->middleware('auth');

Route::post('/image-upload/gizi/notulen', [GiziRapatController::class, 'uploadImageNotulenRapat'])->name('uploadimage.notulengizi')->middleware('auth');

Route::delete('rapat/gizi/notulen/delete', [GiziRapatController::class, 'deleteImageNotulenGizi'])->name('deleteimage.notulengizi')->middleware('auth');

Route::get('rapat/gizi/undangan', [GiziRapatController::class, 'IndexUndangan'])->middleware('auth');

Route::post('/image-upload/gizi/undangan', [GiziRapatController::class, 'uploadImagUndanganRapat'])->name('uploadimage.undangan')->middleware('auth');

Route::delete('rapat/gizi/undangan/delete', [GiziRapatController::class, 'deleteImageUndanganGizi'])->name('deleteimage.undangan')->middleware('auth');




// kesling rapat
Route::get('rapat/kesling/dokumentasi', [KeslingRapatController::class, 'index'])->middleware('auth')->name('KeslingDokumentasi');

Route::post('/image-upload/kesling/dokumentasi', [KeslingRapatController::class, 'uploadImage'])->name('uploadimage.dokumentasikesling')->middleware('auth');

Route::delete('rapat/kesling/dokumentasi/delete', [KeslingRapatController::class, 'deleteImageDokumentasiKesling'])->name('deleteimage.dokumentasikesling')->middleware('auth');

Route::get('rapat/kesling/notulen', [KeslingRapatController::class, 'IndexNotulen'])->name('indexnotulenkesling')->middleware('auth');

Route::post('/image-upload/kesling/notulen', [KeslingRapatController::class, 'uploadImageNotulenRapat'])->name('uploadimage.notulenkesling')->middleware('auth');

Route::delete('rapat/kesling/notulen/delete', [KeslingRapatController::class, 'deleteImageNotulenKesling'])->name('deleteimage.notulenkesling')->middleware('auth');

Route::get('rapat/kesling/undangan', [KeslingRapatController::class, 'IndexUndanganKesling'])->middleware('auth');

Route::post('/image-upload/kesling/undangan', [KeslingRapatController::class, 'uploadImagUndanganRapat'])->name('uploadimage.undangankesling')->middleware('auth');

Route::delete('rapat/kesling/undangan/delete', [KeslingRapatController::class, 'deleteImageUndanganKesling'])->name('deleteimage.undangankesling')->middleware('auth');


// load image

Route::get('public/uploads/lokmun/{name}', [LokmunNotulenController::class, 'getImage'])->name('get.image');



// jadwal

Route::get('jadwal/{prog}', [JadwalController::class, 'index'])-> middleware('auth');

Route::get('jadwal/{prog}/{year}/{month}', [JadwalController::class, 'filter'])-> middleware('auth');

Route::post('jadwal/{prog}/{year}/{month}', [JadwalController::class, 'add'])-> middleware('auth');

Route::put('jadwal/{prog}//{year}/{month}', [JadwalController::class, 'update'])->name('jadwal.update')-> middleware('auth');

Route::delete('jadwal/delete/{prog}', [JadwalController::class, 'delete'])->name('jadwal.delete');