<?php

namespace App\Http\Controllers;

use App\Models\CalonSiswaSd;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;

class CalonSiswaSdController extends Controller
{
    public function index()
    {
        return view('user.calon-sd.index', [
            'user' => Auth::user(),
        ]);
    }

    public function create()
    {
        $calon_siswa_sds = DB::select('select * from calon_siswa_sds');

        return view('user.calon-sd.formulir', [
            'user' => Auth::user(),
            'calon_siswa_sds' => $calon_siswa_sds,
        ]);
    }

    public function store(Request $request)
    {
        // dd($request);

        $attr = $request->validate([
            'nik' => 'required|digits:16|unique:calon_siswa_sds,nik',
            'nama_pd' => 'required',
            'ttl' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'anak_ke' => 'required',
            'status_dalam_keluarga' => 'required',
            'alamat_pd' => 'required',
            'nama_asal_sekolah' => 'required',
            'alamat_asal_sekolah' => 'required',
            'tahun_ijazah' => 'required|digits:4|integer|min:1900|max:' . (date('Y') + 1),
            'nomor_ijazah' => 'required',
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
            $namafoto = $request->nik . "-pas-foto" . "." . $foto->extension();
            $location = public_path('dokumen/sd/' . $namafoto);
            Image::make($foto)->resize(300, 400)->save($location);
            $attr['foto_pd'] = $namafoto;
        }

        if ($request->hasFile('scan_ijazah')) {
            $ijazah = $request->file('scan_ijazah');
            $namaijazah = $request->nik . "-scan-ijazah" . "." . $ijazah->extension();
            $location = public_path('dokumen/sd/' . $namaijazah);
            Image::make($foto)->resize(700, 1200)->save($location);
            $attr['scan_ijazah'] = $namaijazah;
        }

        if ($request->hasFile('scan_akta')) {
            $akta = $request->file('scan_akta');
            $namaakta = $request->nik . "-scan-akta" . "." . $akta->extension();
            $location = public_path('dokumen/sd/' . $namaakta);
            Image::make($akta)->resize(700, 1200)->save($location);
            $attr['scan_akta'] = $namaakta;
        }

        if ($request->hasFile('scan_kk')) {
            $kk = $request->file('scan_kk');
            $namakk = $request->nik . "-scan-kk" . "." . $kk->extension();
            $location = public_path('dokumen/sd/' . $namakk);
            Image::make($kk)->resize(700, 1200)->save($location);
            $attr['scan_kk'] = $namakk;
        }

        $form = new CalonSiswaSd($attr);

        $userId = Auth::id();
        $user = User::findOrFail($userId);
        
        $user->is_data_verified = $request->is_data_verified;
        // dd($request);

        $user->save();
        $user->csSd()->save($form);

        // session()->flash('success', 'Data telah ditambahkan!');
        return redirect()->route('calon.sd');
    }

    public function update(Request $request, CalonSiswaSd $calon_siswa_sd)
    {
        $attr = $request->validate([
            'nik' => 'required|digits:16',
            'nama_pd' => 'required',
            'ttl' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'anak_ke' => 'required',
            'status_dalam_keluarga' => 'required',
            'alamat_pd' => 'required',
            'nama_asal_sekolah' => 'required',
            'alamat_asal_sekolah' => 'required',
            'tahun_ijazah' => 'required|digits:4|integer|min:1900|max:' . (date('Y') + 1),
            'nomor_ijazah' => 'required',
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
            $namafoto = $request->nik . "-pas-foto" . "." . $foto->extension();
            $location = public_path('dokumen/sd/' . $namafoto);
            Image::make($foto)->resize(300, 400)->save($location);
            $attr['foto_pd'] = $namafoto;
        }

        if ($request->hasFile('scan_ijazah')) {
            $ijazah = $request->file('scan_ijazah');
            $namaijazah = $request->nik . "-scan-ijazah" . "." . $ijazah->extension();
            $location = public_path('dokumen/sd/' . $namaijazah);
            Image::make($foto)->resize(700, 1200)->save($location);
            $attr['scan_ijazah'] = $namaijazah;
        }

        if ($request->hasFile('scan_akta')) {
            $akta = $request->file('scan_akta');
            $namaakta = $request->nik . "-scan-akta" . "." . $akta->extension();
            $location = public_path('dokumen/sd/' . $namaakta);
            Image::make($akta)->resize(700, 1200)->save($location);
            $attr['scan_akta'] = $namaakta;
        }

        if ($request->hasFile('scan_kk')) {
            $kk = $request->file('scan_kk');
            $namakk = $request->nik . "-scan-kk" . "." . $kk->extension();
            $location = public_path('dokumen/sd/' . $namakk);
            Image::make($kk)->resize(700, 1200)->save($location);
            $attr['scan_kk'] = $namakk;
        }

        $userId = Auth::id();
        $user = User::findOrFail($userId);
        
        $user->is_data_verified = $request->is_data_verified;
        // dd($request);

        $user->save();
        $user->csSd()->update($attr);

        return redirect()->route('calon.sd');
    }
}
