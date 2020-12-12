<?php

use App\Http\Controllers\admin\DataVerified;
use App\Http\Controllers\admin\KelolaSmaController;
use App\Http\Controllers\CalonSiswaSmaController;
use App\Http\Controllers\UserController;
use App\Models\CalonSiswaSma;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

//alamat untuk website depan
Route::view('/tk', 'tk.index')->name('tk.profil');
Route::view('/tk-visi-dan-misi', 'tk.index')->name('tk.visimisi');
Route::view('/tk/guru-dan-staff', 'tk.index')->name('tk.gurustaff');

//alamat untuk admin
Route::group(['prefix' => 'admin', 'middleware' => 'role:admin'], function () {
    Route::view('/', 'admin.index')->name('admin.page');

    //alamat untuk admin sma
    Route::group(['prefix' => 'sma'], function () {
        Route::get('/', [KelolaSmaController::class, 'tabelVerifikasi'])->name('index.sma');
        Route::get('/verifikas-data', [KelolaSmaController::class, 'index'])->name('verifikasi.sma');
        Route::put('/verifikasi-data/{user:id}', [KelolaSmaController::class, 'verifikasiData']);
    });

    Route::group(['prefix' => 'smp'], function () {
        Route::get('/', [KelolaSmpController::class, 'tabelVerifikasi'])->name('index.smp');
        Route::get('/verifikas-data', [KelolaSmpController::class, 'index'])->name('verifikasi.smp');
        Route::put('/verifikasi-data/{user:id}', [KelolaSmpController::class, 'verifikasiData']);
    });

    Route::group(['prefix' => 'sd'], function () {
        Route::get('/', [KelolaSdController::class, 'tabelVerifikasi'])->name('index.sd');
        Route::get('/verifikas-data', [KelolaSdController::class, 'index'])->name('verifikasi.sd');
        Route::put('/verifikasi-data/{user:id}', [KelolaSdController::class, 'verifikasiData']);
    });

    Route::group(['prefix' => 'tk'], function () {
        Route::get('/', [KelolaTkController::class, 'tabelVerifikasi'])->name('index.tk');
        Route::get('/verifikas-data', [KelolaTkController::class, 'index'])->name('verifikasi.tk');
        Route::put('/verifikasi-data/{user:id}', [KelolaTkController::class, 'verifikasiData']);
    });
});

//alamat untuk calon peserta didik
Route::group(['prefix' => 'calon', 'middleware' => 'role:calon'], function () {
        Route::view('/', 'home')->name('calon');
        Route::get('siswa/', [UserController::class, 'show'])->name('calon.siswa');
        Route::patch('siswa/update/{user}', [UserController::class, 'update']);

    //untuk calon peserta didik sma
    Route::group(['prefix' => 'sma', 'middleware' => ['verified', 'role:calon-sma']], function () {
        Route::get('/', [CalonSiswaSmaController::class, 'index'])->name('calon.sma');
        Route::get('create', [CalonSiswaSmaController::class, 'create'])->name('calon.sma.buat');
        Route::post('store/{user}', [CalonSiswaSmaController::class, 'store']);
        Route::patch('update/{user}', [CalonSiswaSmaController::class, 'update']);
    });

    //untuk calon peserta didik smp
    Route::group(['prefix' => 'smp', 'middleware' => ['verified', 'role:calon-smp']], function () {
        Route::get('/', [CalonSiswaSmpController::class, 'index'])->name('calon.smp');
        Route::get('create', [CalonSiswaSmpController::class, 'create'])->name('calon.smp.buat');
        Route::post('store/{user}', [CalonSiswaSmpController::class, 'store']);
        Route::patch('update/{user}', [CalonSiswaSmpController::class, 'update']);
    });

    //untuk calon peserta didik sd
    Route::group(['prefix' => 'sd', 'middleware' => ['verified', 'role:calon-sd']], function () {
        Route::get('/', [CalonSiswaSdController::class, 'index'])->name('calon.sd');
        Route::get('create', [CalonSiswaSdController::class, 'create'])->name('calon.sd.buat');
        Route::post('store/{user}', [CalonSiswaSdController::class, 'store']);
        Route::patch('update/{user}', [CalonSiswaSdController::class, 'update']);
    });
    
    //untuk calon peserta didik tk
    Route::group(['prefix' => 'tk', 'middleware' => ['verified', 'role:calon-tk']], function () {
        Route::get('/', [CalonSiswaTkController::class, 'index'])->name('calon.tk');
        Route::get('create', [CalonSiswaTkController::class, 'create'])->name('calon.tk.buat');
        Route::post('store/{user}', [CalonSiswaTkController::class, 'store']);
        Route::patch('update/{user}', [CalonSiswaTkController::class, 'update']);

    });
});
