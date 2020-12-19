<?php

namespace App\Http\Controllers;

use App\Models\CalonSiswaTk;
use App\Models\User;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CalonSiswaTkController extends Controller
{
    public function index()
    {
        return view('user.calon-tk.index', [
            'user' => Auth::user(),
        ]);
    }

    public function create()
    {
        $calon_siswa_tks = DB::select('select * from calon_siswa_tks');

        return view('user.calon-tk.formulir', [
            'user' => Auth::user(),
            'calon_siswa_tks' => $calon_siswa_tks,
        ]);
    }

    public function store(Request $request)
    {
        // dd($request);

        $attr = $request->validate([
            'nama_pd' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'ttl' => 'required',
            'agama' => 'required',
            'kewarganegaraan' => 'required',
            'anak_ke' => 'required',
            'banyak_saudara_ibu' => 'required',
            'banyak_saudara_tiri' => 'required',
            'banyak_saudara_angkat' => 'required',
            'bahasa' => 'required',
            'berat' => 'required',
            'tinggi' => 'required',
            'golongan_darah' => 'required',
            'alamat_pd' => 'required',
            'telp_pd' => 'required|max:15',
            'tempat_tinggal' => 'required',
            'hobi' => 'required',
            'nama_ayah' => 'required',
            'ttl_ayah' => 'required',
            'agama_ayah' => 'required',
            'kewarganegaraan_ayah' => 'required',
            'pendidikan_ayah' => 'required',
            'pekerjaan_ayah' => 'required',
            'nama_ibu' => 'required',
            'ttl_ibu' => 'required',
            'agama_ibu' => 'required',
            'kewarganegaraan_ibu' => 'required',
            'pendidikan_ibu' => 'required',
            'pekerjaan_ibu' => 'required',
            'gaji_perbulan' => 'required',
            'jemputan' => 'required',
            'email' => 'required|email',
            'scan_akta' => 'required|mimes:jpg,png,jpeg',
            'scan_kk' => 'required|mimes:jpg,png,jpeg',
            'scan_ktp_ortu' => 'required|mimes:jpg,png,jpeg',
        ]);
        
        $attr['penyakit'] = $request->penyakit;
        $attr['nama_wali'] = $request->nama_wali;
        $attr['ttl_wali'] = $request->alamat_wali;
        $attr['agama_wali'] = $request->alamat_wali;
        $attr['kewarganegaraan_wali'] = $request->alamat_wali;
        $attr['pendidikan_wali'] = $request->alamat_wali;
        $attr['pekerjaan_wali'] = $request->pekerjaan_wali;
                
        if ($request->hasFile('scan_akta')) {
            $akta = $request->file('scan_akta');
            $namaakta = $request->scan_akta . "-scan-akta" . "." . $akta->extension();
            $location = public_path('dokumen/tk/' . $namaakta);
            Image::make($akta)->resize(900, 1200)->save($location);
            $attr['scan_akta'] = $namaakta;
        }

        if ($request->hasFile('scan_kk')) {
            $kk = $request->file('scan_kk');
            $namakk = $request->scan_kk . "-scan-kk" . "." . $kk->extension();
            $location = public_path('dokumen/tk/' . $namakk);
            Image::make($kk)->resize(900, 1200)->save($location);
            $attr['scan_kk'] = $namakk;
        }        
        
        if ($request->hasFile('scan_ktp_ortu')) {
            $ktp = $request->file('scan_ktp_ortu');
            $namaktp = $request->scan_ktp_ortu . "-scan-ktp-ortu" . "." . $ktp->extension();
            $location = public_path('dokumen/tk/' . $namaktp);
            Image::make($ktp)->resize(600, 400)->save($location);
            $attr['scan_ktp_ortu'] = $namaktp;
        }

        // dd($request);

        $form = new CalonSiswaTk($attr);

        $userId = Auth::id();
        $user = User::findOrFail($userId);
        
        $user->is_data_verified = $request->is_data_verified;
        // dd($request);

        $user->save();
        $user->csTk()->save($form);

        session()->flash('masuk', 'Selamat! Data Anda telah ditambahkan ke dalam sistem dan akan diverifikasi');
        return redirect()->route('calon.tk');
    }

    public function update(Request $request, CalonSiswaTk $calon_siswa_tk)
    {
        
        $attr = $request->validate([
            'nama_pd' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'ttl' => 'required',
            'agama' => 'required',
            'kewarganegaraan' => 'required',
            'anak_ke' => 'required',
            'banyak_saudara_ibu' => 'required',
            'banyak_saudara_tiri' => 'required',
            'banyak_saudara_angkat' => 'required',
            'bahasa' => 'required',
            'berat' => 'required',
            'tinggi' => 'required',
            'golongan_darah' => 'required',
            'alamat_pd' => 'required',
            'telp_pd' => 'required|max:15',
            'tempat_tinggal' => 'required',
            'hobi' => 'required',
            'nama_ayah' => 'required',
            'ttl_ayah' => 'required',
            'agama_ayah' => 'required',
            'kewarganegaraan_ayah' => 'required',
            'pendidikan_ayah' => 'required',
            'pekerjaan_ayah' => 'required',
            'nama_ibu' => 'required',
            'ttl_ibu' => 'required',
            'agama_ibu' => 'required',
            'kewarganegaraan_ibu' => 'required',
            'pendidikan_ibu' => 'required',
            'pekerjaan_ibu' => 'required',
            'gaji_perbulan' => 'required',
            'jemputan' => 'required',
            'email' => 'required|email',
        ]);
        
        $attr['penyakit'] = $request->penyakit;
        $attr['nama_wali'] = $request->nama_wali;
        $attr['ttl_wali'] = $request->alamat_wali;
        $attr['agama_wali'] = $request->alamat_wali;
        $attr['kewarganegaraan_wali'] = $request->alamat_wali;
        $attr['pendidkan_wali'] = $request->alamat_wali;
        $attr['pekerjaan_wali'] = $request->pekerjaan_wali;
                
        if ($request->hasFile('scan_akta')) {
            $akta = $request->file('scan_akta');
            $namaakta = $request->scan_akta . "-scan-akta" . "." . $akta->extension();
            $location = public_path('dokumen/tk/' . $namaakta);
            Image::make($akta)->resize(900, 1200)->save($location);
            $attr['scan_akta'] = $namaakta;
        }

        if ($request->hasFile('scan_kk')) {
            $kk = $request->file('scan_kk');
            $namakk = $request->scan_kk . "-scan-kk" . "." . $kk->extension();
            $location = public_path('dokumen/tk/' . $namakk);
            Image::make($kk)->resize(900, 1200)->save($location);
            $attr['scan_kk'] = $namakk;
        }        
        
        if ($request->hasFile('scan_ktp_ortu')) {
            $ktp = $request->file('scan_ktp_ortu');
            $namaktp = $request->scan_ktp_ortu . "-scan-ktp-ortu" . "." . $ktp->extension();
            $location = public_path('dokumen/tk/' . $namaktp);
            Image::make($ktp)->resize(600, 400)->save($location);
            $attr['scan_ktp_ortu'] = $namaktp;
        }

        $userId = Auth::id();
        $user = User::findOrFail($userId);
        
        $user->is_data_verified = $request->is_data_verified;
        // dd($request);

        $user->save();
        $user->csTk()->update($attr);

        session()->flash('edit', 'Tunggu ya! Data Anda akan kembali Kita cek.');
        return redirect()->route('calon.tk');
    }

    public function billing()
    {
        $calon_siswa_tks = CalonSiswaTk::get();

        return view('user.calon-tk.cetakbilling', [
            'user' => Auth::user(),
            'calon_siswa_tks' => $calon_siswa_tks
        ]);
    }
}
