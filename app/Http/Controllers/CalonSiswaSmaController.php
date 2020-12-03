<?php

namespace App\Http\Controllers;

use App\Models\CalonSiswaSma;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

        //store image
        $foto = $request->file('foto_pd');
        $foto->storeAs("image/dokumen/", "{$request->nama_pd}.{$foto->extension()}");
        // $ijazah = $request->file('scan_ijazah');
        // $ijazah->storeAs("image/dokumen/", "{$request->nama_pd}.{$foto->extension()}");
        // $skhun = $request->file('scan_skhun');
        // $skhun->storeAs("image/dokumen/", "{$request->nama_pd}.{$foto->extension()}");

        $attr['foto_pd'] = $foto;
        // $attr['scan_ijazah'] = $ijazah;
        // $attr['scan_skhun'] = $skhun;

        $form = new CalonSiswaSma($attr);

        $userId = Auth::id();
        $user = User::findOrFail($userId);
        $user->is_data_verified = $request->is_data_verified;

        $user->save();
        $user->csSma()->save($form);

        // session()->flash('success', 'Data telah ditambahkan!');
        return redirect()->route('calon.sma');
    }
}
