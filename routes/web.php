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
use App\Http\Controllers\KiaRapatController;
use App\Http\Controllers\P2pRapatController;
use App\Http\Controllers\PerkesmasRapatController;  
use App\Http\Controllers\PromkesRapatController;  
use App\Http\Controllers\KesjiwaRapatController;  
use App\Http\Controllers\PkprRapatController;  
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

Route::get('rapat/kesling/undangan', [KeslingRapatController::class, 'IndexUndangan'])->middleware('auth')->name('indexUndanganKesling');

Route::post('/image-upload/kesling/undangan', [KeslingRapatController::class, 'uploadImagUndanganRapat'])->name('uploadimage.undangankesling')->middleware('auth');

Route::delete('rapat/kesling/undangan/delete', [KeslingRapatController::class, 'deleteImageUndanganKesling'])->name('deleteimage.undangankesling')->middleware('auth');


// kia rapat

Route::get('rapat/kia/dokumentasi', [KiaRapatController::class, 'index'])->middleware('auth')->name('KiaDokumentasi');

Route::post('/image-upload/kia/dokumentasi', [KiaRapatController::class, 'uploadImage'])->name('uploadimage.dokumentasikia')->middleware('auth');

Route::delete('rapat/kia/dokumentasi/delete', [KiaRapatController::class, 'deleteImageDokumentasikia'])->name('deleteimage.dokumentasikia')->middleware('auth');

Route::get('rapat/kia/notulen', [KiaRapatController::class, 'IndexNotulen'])->name('indexnotulenkia')->middleware('auth');

Route::post('/image-upload/kia/notulen', [KiaRapatController::class, 'uploadImageNotulenRapat'])->name('uploadimage.notulenkia')->middleware('auth');

Route::delete('rapat/kia/notulen/delete', [KiagRapatController::class, 'deleteImageNotulenKia'])->name('deleteimage.notulenkia')->middleware('auth');

Route::get('rapat/kia/undangan', [KiaRapatController::class, 'IndexUndangan'])->middleware('auth')->name('indexUndanganKia');

Route::post('/image-upload/kia/undangan', [KiaRapatController::class, 'uploadImagUndanganRapat'])->name('uploadimage.undangankia')->middleware('auth');

Route::delete('rapat/kia/undangan/delete', [KiaRapatController::class, 'deleteImageUndanganKia'])->name('deleteimage.undangankia')->middleware('auth');


// p2p rapat

Route::get('rapat/p2p/dokumentasi', [P2pRapatController::class, 'index'])->middleware('auth')->name('P2pDokumentasi');

Route::post('/image-upload/p2p/dokumentasi', [P2pRapatController::class, 'uploadImage'])->name('uploadimage.dokumentasip2p')->middleware('auth');

Route::delete('rapat/p2p/dokumentasi/delete', [P2pRapatController::class, 'deleteImageDokumentasip2p'])->name('deleteimage.dokumentasip2p')->middleware('auth');

Route::get('rapat/p2p/notulen', [P2pRapatController::class, 'IndexNotulen'])->name('indexnotulenp2p')->middleware('auth');

Route::post('/image-upload/p2p/notulen', [P2pRapatController::class, 'uploadImageNotulenRapat'])->name('uploadimage.notulenp2p')->middleware('auth');

Route::delete('rapat/p2p/notulen/delete', [P2pRapatController::class, 'deleteImageNotulenP2p'])->name('deleteimage.notulenp2p')->middleware('auth');

Route::get('rapat/p2p/undangan', [P2pRapatController::class, 'IndexUndangan'])->middleware('auth')->name('indexUndanganp2p');

Route::post('/image-upload/p2p/undangan', [P2pRapatController::class, 'uploadImagUndanganRapat'])->name('uploadimage.undanganp2p')->middleware('auth');

Route::delete('rapat/p2p/undangan/delete', [P2pRapatController::class, 'deleteImageUndanganP2p'])->name('deleteimage.undanganp2p')->middleware('auth');

// perkesmas rapat

Route::get('rapat/perkesmas/dokumentasi', [PerkesmasRapatController::class, 'index'])->middleware('auth')->name('PerkesmasDokumentasi');

Route::post('/image-upload/perkesmas/dokumentasi', [PerkesmasRapatController::class, 'uploadImage'])->name('uploadimage.dokumentasiperkesmas')->middleware('auth');

Route::delete('rapat/perkesmas/dokumentasi/delete', [PerkesmasRapatController::class, 'deleteImageDokumentasiperkesmas'])->name('deleteimage.dokumentasiperkesmas')->middleware('auth');

Route::get('rapat/perkesmas/notulen', [PerkesmasRapatController::class, 'IndexNotulen'])->name('indexnotulenperkesmas')->middleware('auth');

Route::post('/image-upload/perkesmas/notulen', [PerkesmasRapatController::class, 'uploadImageNotulenRapat'])->name('uploadimage.notulenperkesmas')->middleware('auth');

Route::delete('rapat/perkesmas/notulen/delete', [PerkesmasRapatController::class, 'deleteImageNotulenPerkesmas'])->name('deleteimage.notulenperkesmas')->middleware('auth');

Route::get('rapat/perkesmas/undangan', [PerkesmasRapatController::class, 'IndexUndangan'])->middleware('auth')->name('indexUndanganPerkesmas');

Route::post('/image-upload/perkesmas/undangan', [PerkesmasRapatController::class, 'uploadImagUndanganRapat'])->name('uploadimage.undanganperkesmas')->middleware('auth');

Route::delete('rapat/perkesmas/undangan/delete', [PerkesmasRapatController::class, 'deleteImageUndanganPerkesmas'])->name('deleteimage.undanganperkesmas')->middleware('auth');

// promkes rapat

Route::get('rapat/promkes/dokumentasi', [PromkesRapatController::class, 'index'])->middleware('auth')->name('PromkesDokumentasi');

Route::post('/image-upload/promkes/dokumentasi', [PromkesRapatController::class, 'uploadImage'])->name('uploadimage.dokumentasipromkes')->middleware('auth');

Route::delete('rapat/promkes/dokumentasi/delete', [PromkesRapatController::class, 'deleteImageDokumentasipromkes'])->name('deleteimage.dokumentasipromkes')->middleware('auth');

Route::get('rapat/promkes/notulen', [PromkesRapatController::class, 'IndexNotulen'])->name('indexnotulenpromkes')->middleware('auth');

Route::post('/image-upload/promkes/notulen', [PromkesRapatController::class, 'uploadImageNotulenRapat'])->name('uploadimage.notulenpromkes')->middleware('auth');

Route::delete('rapat/promkes/notulen/delete', [PromkesRapatController::class, 'deleteImageNotulenpromkes'])->name('deleteimage.notulenpromkes')->middleware('auth');

Route::get('rapat/promkes/undangan', [PromkesRapatController::class, 'IndexUndangan'])->middleware('auth')->name('indexUndanganPromkes');

Route::post('/image-upload/promkes/undangan', [PromkesRapatController::class, 'uploadImagUndanganRapat'])->name('uploadimage.undanganpromkes')->middleware('auth');

Route::delete('rapat/promkes/undangan/delete', [PromkesRapatController::class, 'deleteImageUndanganPromkes'])->name('deleteimage.undanganpromkes')->middleware('auth');



// kesjiwa rapat

Route::get('rapat/kesjiwa/dokumentasi', [KesjiwaRapatController::class, 'index'])->middleware('auth')->name('KesjiwaDokumentasi');

Route::post('/image-upload/kesjiwa/dokumentasi', [KesjiwaRapatController::class, 'uploadImage'])->name('uploadimage.dokumentasikesjiwa')->middleware('auth');

Route::delete('rapat/kesjiwa/dokumentasi/delete', [KesjiwaRapatController::class, 'deleteImageDokumentasikesjiwa'])->name('deleteimage.dokumentasikesjiwa')->middleware('auth');

Route::get('rapat/kesjiwa/notulen', [KesjiwaRapatController::class, 'IndexNotulen'])->name('indexnotulenkesjiwa')->middleware('auth');

Route::post('/image-upload/kesjiwa/notulen', [KesjiwaRapatController::class, 'uploadImageNotulenRapat'])->name('uploadimage.notulenkesjiwa')->middleware('auth');

Route::delete('rapat/kesjiwa/notulen/delete', [KesjiwaRapatController::class, 'deleteImageNotulenkesjiwa'])->name('deleteimage.notulenkesjiwa')->middleware('auth');

Route::get('rapat/kesjiwa/undangan', [KesjiwaRapatController::class, 'IndexUndangan'])->middleware('auth')->name('indexUndangankesjiwa');

Route::post('/image-upload/kesjiwa/undangan', [KesjiwaRapatController::class, 'uploadImagUndanganRapat'])->name('uploadimage.undangankesjiwa')->middleware('auth');

Route::delete('rapat/kesjiwa/undangan/delete', [KesjiwaRapatController::class, 'deleteImageUndanganKesjiwa'])->name('deleteimage.undangankesjiwa')->middleware('auth');


// pkpr rapat

Route::get('rapat/pkpr/dokumentasi', [PkprRapatController::class, 'index'])->middleware('auth')->name('PkprDokumentasi');

Route::post('/image-upload/pkpr/dokumentasi', [PkprRapatController::class, 'uploadImage'])->name('uploadimage.dokumentasipkpr')->middleware('auth');

Route::delete('rapat/pkpr/dokumentasi/delete', [PkprRapatController::class, 'deleteImageDokumentasipkpr'])->name('deleteimage.dokumentasipkpr')->middleware('auth');

Route::get('rapat/pkpr/notulen', [PkprRapatController::class, 'IndexNotulen'])->name('indexnotulenpkpr')->middleware('auth');

Route::post('/image-upload/pkpr/notulen', [PkprRapatController::class, 'uploadImageNotulenRapat'])->name('uploadimage.notulenpkpr')->middleware('auth');

Route::delete('rapat/pkpr/notulen/delete', [PkprRapatController::class, 'deleteImageNotulenpkpr'])->name('deleteimage.notulenpkpr')->middleware('auth');

Route::get('rapat/pkpr/undangan', [PkprRapatController::class, 'IndexUndangan'])->middleware('auth')->name('indexundanganpkpr');

Route::post('/image-upload/pkpr/undangan', [PkprRapatController::class, 'uploadImagUndanganRapat'])->name('uploadimage.undanganpkpr')->middleware('auth');

Route::delete('rapat/pkpr/undangan/delete', [PkprRapatController::class, 'deleteImageUndanganPkpr'])->name('deleteimage.undanganpkpr')->middleware('auth');

// load image

Route::get('public/uploads/lokmun/{name}', [LokmunNotulenController::class, 'getImage'])->name('get.image');



// jadwal

Route::get('jadwal/{prog}', [JadwalController::class, 'index'])-> middleware('auth');

Route::get('jadwal/{prog}/{year}/{month}', [JadwalController::class, 'filter'])-> middleware('auth');

Route::post('jadwal/{prog}/{year}/{month}', [JadwalController::class, 'add'])-> middleware('auth');

Route::put('jadwal/{prog}//{year}/{month}', [JadwalController::class, 'update'])->name('jadwal.update')-> middleware('auth');

Route::delete('jadwal/delete/{prog}', [JadwalController::class, 'delete'])->name('jadwal.delete');