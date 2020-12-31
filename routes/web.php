<?php

use App\Http\Controllers\admin\KelolaSmaController;
use App\Http\Controllers\admin\KelolaSmpController;
use App\Http\Controllers\admin\KelolaSdController;
use App\Http\Controllers\admin\KelolaTkController;
use App\Http\Controllers\CalonSiswaSmaController;
use App\Http\Controllers\CalonSiswaSmpController;
use App\Http\Controllers\CalonSiswaSdController;
use App\Http\Controllers\CalonSiswaTkController;
use App\Http\Controllers\UserController;
use App\Models\CalonSiswaTk;
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
Route::group(['prefix' => 'admin', 'middleware' => 'role:admin|super-admin'], function () {
    Route::view('/', 'admin.index')->name('admin.page');

    //alamat untuk admin sma
    Route::group(['prefix' => 'sma', 'middleware' => 'permission:kelola data calon sma'], function () {
        Route::get('/', [KelolaSmaController::class, 'index'])->name('index.sma');
        Route::get('/verifikas-data', [KelolaSmaController::class, 'tabelVerifikasi'])->name('verifikasi.sma');
        // Route::get('/verifikas-data', [KelolaSmaController::class, 'tabelVerifikasiValid'])->name('verifikasi.sma.valid');
        // Route::get('/verifikas-data', [KelolaSmaController::class, 'tabelVerifikasiTakValid'])->name('verifikasi.sma.takvalid');
        Route::put('/verifikasi-data/{user:id}', [KelolaSmaController::class, 'verifikasiData']);
        Route::get('/pembayaran-data',[KelolaSmaController::class, 'tabelBayar'])->name('pembayaran.sma');
    });

    //alamat untuk admin smp
    Route::group(['prefix' => 'smp', 'middleware' =>'permission:kelola data calon smp'], function () {
        Route::get('/', [KelolaSmpController::class, 'index'])->name('index.smp');
        Route::get('/verifikas-data', [KelolaSmpController::class, 'tabelVerifikasi'])->name('verifikasi.smp');
        // Route::get('/verifikas-data', [KelolaSmpController::class, 'tabelVerifikasiValid'])->name('verifikasi.smp.valid');
        // Route::get('/verifikas-data', [KelolaSmpController::class, 'tabelVerifikasiTakValid'])->name('verifikasi.smp.takvalid');
        Route::put('/verifikasi-data/{user:id}', [KelolaSmpController::class, 'verifikasiData']);
        Route::get('/pembayaran-data',[KelolaSmpController::class, 'tabelBayar'])->name('pembayaran.smp');
    });

    //alamat untuk admin sd
    Route::group(['prefix' => 'sd', 'middleware' =>'permission:kelola data calon sd'], function () {
        Route::get('/', [KelolaSdController::class, 'index'])->name('index.sd');
        Route::get('/verifikas-data', [KelolaSdController::class, 'tabelVerifikasi'])->name('verifikasi.sd');
        // Route::get('/verifikas-data', [KelolaSdController::class, 'tabelVerifikasiValid'])->name('verifikasi.sd.valid');
        // Route::get('/verifikas-data', [KelolaSdController::class, 'tabelVerifikasiTakValid'])->name('verifikasi.sd.takvalid');
        Route::put('/verifikasi-data/{user:id}', [KelolaSdController::class, 'verifikasiData']);
        Route::get('/pembayaran-data',[KelolaSdController::class, 'tabelBayar'])->name('pembayaran.sd');
    });

    //alamat untuk admin tk
    Route::group(['prefix' => 'tk', 'middleware' =>'permission:kelola data calon tk'], function () {
        Route::get('/', [KelolaTkController::class, 'index'])->name('index.tk');
        Route::get('/verifikas-data', [KelolaTkController::class, 'tabelVerifikasi'])->name('verifikasi.tk');
        Route::get('/verifikas-data-valid', [KelolaTkController::class, 'tabelVerifikasiValid'])->name('verifikasi.tk.valid');
        Route::get('/verifikas-data-takvalid', [KelolaTkController::class, 'tabelVerifikasiTakValid'])->name('verifikasi.tk.takvalid');
        Route::put('/verifikasi-data/{user:id}', [KelolaTkController::class, 'verifikasiData']);
        Route::get('/pembayaran-data',[KelolaTkController::class, 'tabelBayar'])->name('pembayaran.tk');
    });
});

//alamat untuk calon peserta didik
Route::group(['prefix' => 'calon', 'middleware' => 'role:calon|super-admin'], function () {
    Route::view('/', 'home')->name('calon');
    Route::post('siswa/kirim-email', [UserController::class, 'kirimEmail'])->name('kirim.email');


    Route::group(['prefix' => 'daftar', 'middleware' => 'permission:memilih sekolah'], function () {
        Route::get('siswa/', [UserController::class, 'show'])->name('calon.siswa');
        Route::patch('siswa/update/{user}', [UserController::class, 'update']);
    });    
    
    //untuk calon peserta didik sma
    Route::group(['prefix' => 'sma', 'middleware' => ['verified', 'permission:melakukan pendaftaran sma']], function () {
        Route::get('/', [CalonSiswaSmaController::class, 'index'])->name('calon.sma');
        Route::get('create', [CalonSiswaSmaController::class, 'create'])->name('calon.sma.buat');
        Route::post('store/{user}', [CalonSiswaSmaController::class, 'store']);
        Route::patch('update/{user}', [CalonSiswaSmaController::class, 'update']);
        Route::get('billing', [CalonSiswaSmaController::class, 'billing'])->name('calon.sma.billing');
    });

    //untuk calon peserta didik smp
    Route::group(['prefix' => 'smp', 'middleware' => ['verified', 'permission:melakukan pendaftaran smp']], function () {
        Route::get('/', [CalonSiswaSmpController::class, 'index'])->name('calon.smp');
        Route::get('create', [CalonSiswaSmpController::class, 'create'])->name('calon.smp.buat');
        Route::post('store/{user}', [CalonSiswaSmpController::class, 'store']);
        Route::patch('update/{user}', [CalonSiswaSmpController::class, 'update']);
        Route::get('billing', [CalonSiswaSmpController::class, 'billing'])->name('calon.smp.billing');
    });

    //untuk calon peserta didik sd
    Route::group(['prefix' => 'sd', 'middleware' => ['verified', 'permission:melakukan pendaftaran sd']], function () {
        Route::get('/', [CalonSiswaSdController::class, 'index'])->name('calon.sd');
        Route::get('create', [CalonSiswaSdController::class, 'create'])->name('calon.sd.buat');
        Route::post('store/{user}', [CalonSiswaSdController::class, 'store']);
        Route::patch('update/{user}', [CalonSiswaSdController::class, 'update']);
        Route::get('billing', [CalonSiswaSdController::class, 'billing'])->name('calon.sd.billing');
    });
    
    //untuk calon peserta didik tk
    Route::group(['prefix' => 'tk', 'middleware' => ['verified', 'permission:melakukan pendaftaran tk']], function () {
        Route::get('/', [CalonSiswaTkController::class, 'index'])->name('calon.tk');
        Route::get('create', [CalonSiswaTkController::class, 'create'])->name('calon.tk.buat');
        Route::post('store/{user}', [CalonSiswaTkController::class, 'store']);
        Route::patch('update/{user}', [CalonSiswaTkController::class, 'update']);
        Route::get('billing', [CalonSiswaTkController::class, 'billing'])->name('calon.tk.billing');
    });
});
