<?php

use App\Http\Controllers\admin\DataVerified;
use App\Http\Controllers\admin\KelolaSmaController;
use App\Http\Controllers\CalonSiswaSmaController;
use App\Http\Controllers\UserController;
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
        Route::get('/', [KelolaSmaController::class, 'index'])->name('tabel.sma');
        Route::get('/verifikasi-data', [KelolaSmaController::class, 'verifikasiData '])->name('verifikasi.sma');
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
    });
});
