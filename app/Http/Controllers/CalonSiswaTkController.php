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
            'ttl' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'anak_ke' => 'required',
            'status_dalam_keluarga' => 'required',
            'alamat_pd' => 'required',
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
            $namafoto = $request->nama_pd . "-pas-foto" . "." . $foto->extension();
            $location = public_path('dokumen/tk/' . $namafoto);
            Image::make($foto)->resize(300, 400)->save($location);
            $attr['foto_pd'] = $namafoto;
        }

        if ($request->hasFile('scan_akta')) {
            $akta = $request->file('scan_akta');
            $namaakta = $request->nama_pd . "-scan-akta" . "." . $akta->extension();
            $location = public_path('dokumen/tk/' . $namaakta);
            Image::make($akta)->resize(700, 1200)->save($location);
            $attr['scan_akta'] = $namaakta;
        }

        if ($request->hasFile('scan_kk')) {
            $kk = $request->file('scan_kk');
            $namakk = $request->nama_pd . "-scan-kk" . "." . $kk->extension();
            $location = public_path('dokumen/tk/' . $namakk);
            Image::make($kk)->resize(700, 1200)->save($location);
            $attr['scan_kk'] = $namakk;
        }

        $form = new CalonSiswaTk($attr);

        $userId = Auth::id();
        $user = User::findOrFail($userId);
        
        $user->is_data_verified = $request->is_data_verified;
        // dd($request);

        $user->save();
        $user->csTk()->save($form);

        // session()->flash('success', 'Data telah ditambahkan!');
        return redirect()->route('calon.tk');
    }

    public function update(Request $request, CalonSiswaTk $calon_siswa_tk)
    {
        
        $attr = $request->validate([
            'nama_pd' => 'required',
            'nama' => 'required',
            'ttl' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'anak_ke' => 'required',
            'status_dalam_keluarga' => 'required',
            'alamat_pd' => 'required',
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
            $namafoto = $request->nama_pd . "-pas-foto" . "." . $foto->extension();
            $location = public_path('dokumen/tk/' . $namafoto);
            Image::make($foto)->resize(300, 400)->save($location);
            $attr['foto_pd'] = $namafoto;
        }

        if ($request->hasFile('scan_akta')) {
            $akta = $request->file('scan_akta');
            $namaakta = $request->nama_pd . "-scan-akta" . "." . $akta->extension();
            $location = public_path('dokumen/tk/' . $namaakta);
            Image::make($akta)->resize(700, 1200)->save($location);
            $attr['scan_akta'] = $namaakta;
        }

        if ($request->hasFile('scan_kk')) {
            $kk = $request->file('scan_kk');
            $namakk = $request->nama_pd . "-scan-kk" . "." . $kk->extension();
            $location = public_path('dokumen/tk/' . $namakk);
            Image::make($kk)->resize(700, 1200)->save($location);
            $attr['scan_kk'] = $namakk;
        }

        $userId = Auth::id();
        $user = User::findOrFail($userId);
        
        $user->is_data_verified = $request->is_data_verified;
        // dd($request);

        $user->save();
        $user->csTk()->update($attr);

        return redirect()->route('calon.tk');
    }
}
