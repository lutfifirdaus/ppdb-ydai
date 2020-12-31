<?php

namespace App\Http\Controllers;

use App\Enums\{Agama,KebutuhanKhusus,ModaTransportasi,Pekerjaan,Pendidikan,Penghasilan,TempatTiggal,Tingkat};
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
            'agama' => Agama::getValues(),
            'kebutuhan_khusus' => KebutuhanKhusus::getValues(),
            'moda_transportasi' => ModaTransportasi::getValues(),
            'pekerjaan' => Pekerjaan::getValues(),
            'pendidikan' => Pendidikan::getValues(),
            'penghasilan' => Penghasilan::getValues(),
            'tempat_tinggal' => TempatTiggal::getValues(),
            'tingkat' => Tingkat::getValues(),
        ]);
    }

    public function store(Request $request)
    {
    
        $attr = $request->validate([
            'nik' => 'required|digits:16|unique:calon_siswa_sds,nik,except,id',
            'nama_pd' => 'required',
            'ttl' => 'required',
            'jenis_kelamin' => 'required',
            'no_akta' => 'required|digits:16|unique:calon_siswa_sds,no_akta,except,id',
            'agama' => 'required',
            'anak_ke' => 'required',
            'banyak_saudara_kandung' => 'required',
            'kewarganegaraan' => 'required',
            'kebutuhan_khusus',
            'alamat_pd' => 'required',
            'telp_rumah' => 'required|digits:12',
            'telp_pd' => 'required|digits_between:11,13',
            'alat_transport' => 'required',
            'waktu_kesekolah' => 'required',
            'jarak_kesekolah' => 'required',
            'jenis_tinggal' => 'required',
            'tinggi' => 'required',
            'berat' => 'required',
            'no_kks' => 'required|digits_between:0,18',
            'no_kis' => 'required|digits_between:0,18',
            'no_kps' => 'required|digits_between:0,18',
            'nama_asal_sekolah' => 'required',
            'alamat_asal_sekolah' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'nama_wali',
            'tahun_lahir_ayah' => 'required|digits:4',
            'tahun_lahir_ibu' => 'required|digits:4',
            'tahun_lahir_wali',
            'pekerjaan_ayah' => 'required',
            'pekerjaan_ibu' => 'required',
            'pekerjaan_wali',
            'pendidikan_ayah' => 'required',
            'pendidikan_ibu' => 'required',
            'pendidikan_wali',
            'penghasilan_ayah' => 'required',
            'penghasilan_ibu' => 'required',
            'penghasilan_wali',
            'pekerjaan_ayah' => 'required',
            'pekerjaan_ibu' => 'required',
            'pekerjaan_wali',
            'foto_pd' => 'required|mimes:jpg,png,jpeg',
            'scan_akta' => 'required|mimes:jpg,png,jpeg',
            'scan_kk' => 'required|mimes:jpg,png,jpeg',
            'scan_ktp_ortu' => 'required|mimes:jpg,png,jpeg',
        ]);
        
        // $attr['ttl'] = $request->session()->get('t') . ', ' . $request->session()->get('tl');

        // $attr['nama_wali'] = $request->nama_wali;
        // $attr['alamat_wali'] = $request->alamat_wali;
        // $attr['pekerjaan_wali'] = $request->pekerjaan_wali;
                
        if ($request->hasFile('foto_pd')) {
            $foto = $request->file('foto_pd');
            $namafoto = $request->foto_pd . "-pas-foto" . "." . $foto->extension();
            $location = public_path('dokumen/sd/' . $namafoto);
            Image::make($foto)->resize(300, 400)->save($location);
            $attr['foto_pd'] = $namafoto;
        }

        if ($request->hasFile('scan_ijazah')) {
            $ijazah = $request->file('scan_ijazah');
            $namaijazah = $request->scan_ijazah . "-scan-ijazah" . "." . $ijazah->extension();
            $location = public_path('dokumen/sd/' . $namaijazah);
            Image::make($foto)->resize(900, 1200)->save($location);
            $attr['scan_ijazah'] = $namaijazah;
        }

        if ($request->hasFile('scan_akta')) {
            $akta = $request->file('scan_akta');
            $namaakta = $request->scan_akta . "-scan-akta" . "." . $akta->extension();
            $location = public_path('dokumen/sd/' . $namaakta);
            Image::make($akta)->resize(900, 1200)->save($location);
            $attr['scan_akta'] = $namaakta;
        }

        if ($request->hasFile('scan_kk')) {
            $kk = $request->file('scan_kk');
            $namakk = $request->scan_kk . "-scan-kk" . "." . $kk->extension();
            $location = public_path('dokumen/sd/' . $namakk);
            Image::make($kk)->resize(900, 1200)->save($location);
            $attr['scan_kk'] = $namakk;
        }

        if ($request->hasFile('scan_kks')) {
            $kks = $request->file('scan_kks');
            $namakks = $request->scan_kks . "-scan-kks" . "." . $kks->extension();
            $location = public_path('dokumen/sd/' . $namakks);
            Image::make($kks)->resize(600, 400)->save($location);
            $attr['scan_kks'] = $namakks;
        }

        if ($request->hasFile('scan_kip')) {
            $kip = $request->file('scan_kip');
            $namakip = $request->scan_kip . "-scan-kip" . "." . $kip->extension();
            $location = public_path('dokumen/sd/' . $namakip);
            Image::make($kip)->resize(600, 400)->save($location);
            $attr['scan_kip'] = $namakip;
        }

        if ($request->hasFile('scan_kps')) {
            $kps = $request->file('scan_kps');
            $namakps = $request->scan_kps . "-scan-kps" . "." . $kps->extension();
            $location = public_path('dokumen/sd/' . $namakps);
            Image::make($kps)->resize(600, 400)->save($location);
            $attr['scan_kps'] = $namakps;
        }

        $form = new CalonSiswaSd($attr);

        $userId = Auth::id();
        $user = User::findOrFail($userId);
        
        $user->is_data_verified = $request->is_data_verified;

        $user->save();
        $user->csSd()->save($form);

        session()->flash('masuk', 'Selamat! Data Anda telah ditambahkan ke dalam sistem dan akan diverifikasi');
        return redirect()->route('calon.sd');
    }

    public function update(Request $request, CalonSiswaSd $calon_siswa_sd)
    {
        $attr = $request->validate([
            'nik' => 'required|digits:16|unique:calon_siswa_sds,nik,except,id',
            'nama_pd' => 'required',
            'ttl' => 'required',
            'jenis_kelamin' => 'required',
            'no_akta' => 'required|digits:16|unique:calon_siswa_sds,no_akta,except,id',
            'agama' => 'required',
            'anak_ke' => 'required',
            'banyak_saudara_kandung' => 'required',
            'kewarganegaraan' => 'required',
            'kebutuhan_khusus' => 'required',
            'alamat_pd' => 'required',
            'telp_rumah' => 'required|digits:12',
            'telp_pd' => 'required|digits_between:11,13',
            'alat_transport' => 'required',
            'waktu_kesekolah' => 'required',
            'jarak_kesekolah' => 'required',
            'tinggal_dengan' => 'required',
            'tinggi' => 'required',
            'berat' => 'required',
            'no_kks' => 'required|digits_between:0,18',
            'no_kis' => 'required|digits_between:0,18',
            'no_kps' => 'required|digits_between:0,18',
            'nama_asal_sekolah' => 'required',
            'alamat_asal_sekolah' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'nama_wali',
            'tahun_lahir_ayah' => 'required|digit:4',
            'tahun_lahir_ibu' => 'required|digit:4',
            'tahun_lahir_wali',
            'pekerjaan_ayah' => 'required',
            'pekerjaan_ibu' => 'required',
            'pekerjaan_wali',
            'pendidikan_ayah' => 'required',
            'pendidikan_ibu' => 'required',
            'pendidikan_wali',
            'penghasilan_ayah' => 'required',
            'penghasilan_ibu' => 'required',
            'penghasilan_wali',
            'pekerjaan_ayah' => 'required',
            'pekerjaan_ibu' => 'required',
            'pekerjaan_wali',
        ]);
        
        // $attr['nama_wali'] = $request->nama_wali;
        // $attr['alamat_wali'] = $request->alamat_wali;
        // $attr['pekerjaan_wali'] = $request->pekerjaan_wali;
                
        if ($request->hasFile('foto_pd')) {
            $foto = $request->file('foto_pd');
            $namafoto = $request->foto_pd . "-pas-foto" . "." . $foto->extension();
            $location = public_path('dokumen/sd/' . $namafoto);
            Image::make($foto)->resize(300, 400)->save($location);
            $attr['foto_pd'] = $namafoto;
        }

        if ($request->hasFile('scan_ijazah')) {
            $ijazah = $request->file('scan_ijazah');
            $namaijazah = $request->scan_ijazah . "-scan-ijazah" . "." . $ijazah->extension();
            $location = public_path('dokumen/sd/' . $namaijazah);
            Image::make($foto)->resize(900, 1200)->save($location);
            $attr['scan_ijazah'] = $namaijazah;
        }

        if ($request->hasFile('scan_akta')) {
            $akta = $request->file('scan_akta');
            $namaakta = $request->scan_akta . "-scan-akta" . "." . $akta->extension();
            $location = public_path('dokumen/sd/' . $namaakta);
            Image::make($akta)->resize(900, 1200)->save($location);
            $attr['scan_akta'] = $namaakta;
        }

        if ($request->hasFile('scan_kk')) {
            $kk = $request->file('scan_kk');
            $namakk = $request->scan_kk . "-scan-kk" . "." . $kk->extension();
            $location = public_path('dokumen/sd/' . $namakk);
            Image::make($kk)->resize(900, 1200)->save($location);
            $attr['scan_kk'] = $namakk;
        }

        if ($request->hasFile('scan_kks')) {
            $kks = $request->file('scan_kks');
            $namakks = $request->scan_kks . "-scan-kks" . "." . $kks->extension();
            $location = public_path('dokumen/sd/' . $namakks);
            Image::make($kks)->resize(900, 1200)->save($location);
            $attr['scan_kks'] = $namakks;
        }

        if ($request->hasFile('scan_kip')) {
            $kip = $request->file('scan_kip');
            $namakip = $request->scan_kip . "-scan-kip" . "." . $kip->extension();
            $location = public_path('dokumen/sd/' . $namakip);
            Image::make($kip)->resize(900, 1200)->save($location);
            $attr['scan_kip'] = $namakip;
        }

        if ($request->hasFile('scan_kps')) {
            $kps = $request->file('scan_kps');
            $namakps = $request->scan_kps . "-scan-kps" . "." . $kps->extension();
            $location = public_path('dokumen/sd/' . $namakps);
            Image::make($kps)->resize(900, 1200)->save($location);
            $attr['scan_kps'] = $namakps;
        }
        // dd($request);

        $userId = Auth::id();
        $user = User::findOrFail($userId);
        
        $user->is_data_verified = $request->is_data_verified;

        $user->save();
        $user->csSd()->update($attr);

        session()->flash('edit', 'Tunggu ya! Data Anda akan kembali Kita cek.');
        return redirect()->route('calon.sd');
    }

    public function billing()
    {
        $calon_siswa_sds = CalonSiswaSd::get();

        return view('user.calon-sd.cetakbilling', [
            'user' => Auth::user(),
            'calon_siswa_sds' => $calon_siswa_sds
        ]);
    }
}
