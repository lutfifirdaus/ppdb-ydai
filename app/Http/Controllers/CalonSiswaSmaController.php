<?php

namespace App\Http\Controllers;

use App\Models\CalonSiswaSma;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class CalonSiswaSmaController extends Controller
{
    public function index()
    {
        return view('user.calon-sma.index', [
            'user' => Auth::user(),
        ]);
    }

    public function create()
    {
        $calon_siswa_smas = DB::select('select * from calon_siswa_smas');

        return view('user.calon-sma.formulir', [
            'user' => Auth::user(),
            'calon_siswa_smas' => $calon_siswa_smas,
        ]);
    }

    public function store(Request $request)
    {
        // dd($request);

        $attr = $request->validate([
            'nisn' => 'required|digits:10|unique:calon_siswa_smas,nisn',
            'nama_pd' => 'required',
            'ttl' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'anak_ke' => 'required',
            'status_dalam_keluarga' => 'required',
            'alamat_pd' => 'required',
            'telp_pd' => 'required|digits_between:12,15|unique:calon_siswa_smas,telp_pd',
            'nama_asal_sekolah' => 'required',
            'alamat_asal_sekolah' => 'required',
            'tahun_ijazah' => 'required|digits:4|integer|min:1900|max:' . (date('Y') + 1),
            'nomor_ijazah' => 'required',
            'tahun_skhun' => 'required|digits:4|integer|min:1900|max:' . (date('Y') + 1),
            'nomor_skhun' => 'required',
            'nomor_peserta_un' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'alamat_ortu' => 'required',
            'telp_ortu' => 'required',
            'pekerjaan_ayah' => 'required',
            'pekerjaan_ibu' => 'required',
        ]);
        
        $attr['nama_wali'] = $request->nama_wali;
        $attr['alamat_wali'] = $request->alamat_wali;
        $attr['pekerjaan_wali'] = $request->pekerjaan_wali;
                
        if ($request->hasFile('foto_pd')) {
            $foto = $request->file('foto_pd');
            $namafoto = $request->nisn . "-pas-foto" . "." . $foto->extension();
            $location = public_path('dokumen/sma/' . $namafoto);
            Image::make($foto)->resize(300, 400)->save($location);
            $attr['foto_pd'] = $namafoto;
        }

        if ($request->hasFile('scan_ijazah')) {
            $ijazah = $request->file('scan_ijazah');
            $namaijazah = $request->nisn . "-scan-ijazah" . "." . $ijazah->extension();
            $location = public_path('dokumen/sma/' . $namaijazah);
            Image::make($foto)->resize(700, 1200)->save($location);
            $attr['scan_ijazah'] = $namaijazah;
        }

        if ($request->hasFile('scan_skhun')) {
            $skhun = $request->file('scan_skhun');
            $namaskhun = $request->nisn . "-scan-skhun" . "." . $skhun->extension();
            $location = public_path('dokumen/sma/' . $namaskhun);
            Image::make($skhun)->resize(700, 1200)->save($location);
            $attr['scan_skhun'] = $namaskhun;
        }

        $form = new CalonSiswaSma($attr);

        $userId = Auth::id();
        $user = User::findOrFail($userId);
        
        $user->is_data_verified = $request->is_data_verified;
        // dd($request);

        $user->save();
        $user->csSma()->save($form);

        // session()->flash('success', 'Data telah ditambahkan!');
        return redirect()->route('calon.sma');
    }

    public function update(Request $request, CalonSiswaSma $calon_siswa_sma)
    {
        $attr = $request->validate([
            'nisn' => 'required|digits:10|unique:calon_siswa_smas,nisn',
            'nama_pd' => 'required',
            'ttl' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'anak_ke' => 'required',
            'status_dalam_keluarga' => 'required',
            'alamat_pd' => 'required',
            'telp_pd' => 'required|digits_between:12,15|unique:calon_siswa_smas,telp_pd',
            'nama_asal_sekolah' => 'required',
            'alamat_asal_sekolah' => 'required',
            'tahun_ijazah' => 'required|digits:4|integer|min:1900|max:' . (date('Y') + 1),
            'nomor_ijazah' => 'required',
            'tahun_skhun' => 'required|digits:4|integer|min:1900|max:' . (date('Y') + 1),
            'nomor_skhun' => 'required',
            'nomor_peserta_un' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'alamat_ortu' => 'required',
            'telp_ortu' => 'required',
            'pekerjaan_ayah' => 'required',
            'pekerjaan_ibu' => 'required',
        ]);
        
        $attr['nama_wali'] = $request->nama_wali;
        $attr['alamat_wali'] = $request->alamat_wali;
        $attr['pekerjaan_wali'] = $request->pekerjaan_wali;
                
        if ($request->hasFile('foto_pd')) {
            $foto = $request->file('foto_pd');
            $namafoto = $request->nisn . "-pas-foto" . "." . $foto->extension();
            $location = public_path('dokumen/sma/' . $namafoto);
            Image::make($foto)->resize(300, 400)->save($location);
            $attr['foto_pd'] = $namafoto;
        }

        if ($request->hasFile('scan_ijazah')) {
            $ijazah = $request->file('scan_ijazah');
            $namaijazah = $request->nisn . "-scan-ijazah" . "." . $ijazah->extension();
            $location = public_path('dokumen/sma/' . $namaijazah);
            Image::make($foto)->resize(700, 1200)->save($location);
            $attr['scan_ijazah'] = $namaijazah;
        }

        if ($request->hasFile('scan_skhun')) {
            $skhun = $request->file('scan_skhun');
            $namaskhun = $request->nisn . "-scan-skhun" . "." . $skhun->extension();
            $location = public_path('dokumen/sma/' . $namaskhun);
            Image::make($skhun)->resize(700, 1200)->save($location);
            $attr['scan_skhun'] = $namaskhun;
        }

        $userId = Auth::id();
        $user = User::findOrFail($userId);
        
        $user->is_data_verified = $request->is_data_verified;
        // dd($request);

        $user->save();
        $user->csSma()->update($attr);

        // session()->flash('success', 'Data telah ditambahkan!');
        return redirect()->route('calon.sma');
    }
}
