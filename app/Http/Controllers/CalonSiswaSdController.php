<?php

namespace App\Http\Controllers;

use App\Enums\{Agama, KebutuhanKhusus, ModaTransportasi, Pekerjaan, Pendidikan, Penghasilan, TempatTiggal, Tingkat};
use App\Models\CalonSiswaSd;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rule;

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

        return view('user.calon-sd.formulir', [
            'user' => Auth::user(),
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
            //validasi pribadi
            'nama_pd' => 'required',
            'nik' => 'required|digits:16|unique:calon_siswa_sds,nik,except,id',
            'jenis_kelamin' => ['required', Rule::in('Laki-laki', 'Perempuan')],
            'nisn' => 'required|digits:10|unique:calon_siswa_sds,nisn,except,id',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'no_akta' => 'required|unique:calon_siswa_sds,no_akta,except,id',
            'anak_ke' => 'required|digits:2',
            'agama' => ['required', Rule::in(Agama::getValues())],
            'kewarganegaraan' => 'required',
            'kebutuhan_khusus' => ['required', Rule::in(KebutuhanKhusus::getValues())],
            'alamat_pd' => 'required',
            'rt' => 'required|digits:3',
            'rw' => 'required|digits:3',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'kabupaten' => 'required',
            'kode_pos' => 'required|digits:5',
            'lintang' => 'required',
            'bujur' => 'required',
            'moda_transportasi' => ['required', Rule::in(ModaTransportasi::getValues())],
            'jenis_tinggal' => 'required',
            'penerima_kip' => 'boolean',
            'no_kip' => 'required_if:penerima_kip,1|digits_between:0,18|unique:calon_siswa_sds,no_kip,except,id',
            'penerima_kks' => 'boolean',
            'no_kks' => 'required_if:penerima_kks,1|digits_between:0,18|unique:calon_siswa_sds,no_kks,except,id',
            'penerima_kps' => 'boolean',
            'no_kps' => 'required_if:penerima_kps,1|digits_between:0,18|unique:calon_siswa_sds,no_kps,except,id',

            //validasi kontak
            'telp_rumah' => 'required|digits:12',
            'telp_pd' => 'required|digits_between:11,15',
            'email' => 'required|email|unique:calon_siswa_sds,email,except,id',

            //validasi orangtua
            'nama_ayah' => 'required',
            'tahun_lahir_ayah' => 'required|digits:4',
            'pendidikan_ayah' => ['required', Rule::in(Pendidikan::getValues())],
            'pekerjaan_ayah' => ['required', Rule::in(Pekerjaan::getValues())],
            'penghasilan_ayah' => ['required', Rule::in(Penghasilan::getValues())],

            'nama_ibu' => 'required',
            'tahun_lahir_ibu' => 'required|digits:4',
            'pendidikan_ibu' => ['required', Rule::in(Pendidikan::getValues())],
            'pekerjaan_ibu' => ['required', Rule::in(Pekerjaan::getValues())],
            'penghasilan_ibu' => ['required', Rule::in(Penghasilan::getValues())],

            'nama_wali',
            'tahun_lahir_wali' => 'required_with:nama_wali|digits:4',
            'pendidikan_wali' => ['required_with:nama_wali', Rule::in(Pendidikan::getValues())],
            'pekerjaan_wali' => ['required_with:nama_wali', Rule::in(Pekerjaan::getValues())],
            'penghasilan' => ['required_with:nama_wali', Rule::in(Penghasilan::getValues())],

            //validasi periodik
            'banyak_saudara_kandung' => 'required',
            'waktu_kesekolah' => 'required',
            'jarak_kesekolah' => 'required',
            'tinggi' => 'required',
            'berat' => 'required',

            //validasi asal sekolah
            'nama_asal_sekolah' => 'required',
            'alamat_asal_sekolah' => 'required',

            //validasi dokumen
            'foto_pd' => 'required|mimes:jpg,png,jpeg',
            'scan_akta' => 'required|mimes:jpg,png,jpeg',
            'scan_kk' => 'required|mimes:jpg,png,jpeg',
            'scan_ijazah' => 'required|mimes:jpg,png,jpeg',
            'scan_kks' => 'required_if:penerima_kks,1|mimes:jpg,png,jpeg',
            'scan_kip' => 'required_if:penerima_kip,1|mimes:jpg,png,jpeg',
            'scan_kps' => 'required_if:penerima_kps,1|mimes:jpg,png,jpeg',
        ]);

        if ($request->hasFile('foto_pd')) {
            $foto = $request->file('foto_pd');
            $namafoto = $request->nama_pd . "-pas-foto" . "." . $foto->extension();
            $location = public_path('dokumen/sd/' . $namafoto);
            Image::make($foto)->resize(300, 400)->save($location);
            $attr['foto_pd'] = $namafoto;
        }

        if ($request->hasFile('scan_ijazah')) {
            $ijazah = $request->file('scan_ijazah');
            $namaijazah = $request->nama_pd . "-scan-ijazah" . "." . $ijazah->extension();
            $location = public_path('dokumen/sd/' . $namaijazah);
            Image::make($foto)->resize(900, 1200)->save($location);
            $attr['scan_ijazah'] = $namaijazah;
        }

        if ($request->hasFile('scan_akta')) {
            $akta = $request->file('scan_akta');
            $namaakta = $request->nama_pd . "-scan-akta" . "." . $akta->extension();
            $location = public_path('dokumen/sd/' . $namaakta);
            Image::make($akta)->resize(900, 1200)->save($location);
            $attr['scan_akta'] = $namaakta;
        }

        if ($request->hasFile('scan_kk')) {
            $kk = $request->file('scan_kk');
            $namakk = $request->nama_pd . "-scan-kk" . "." . $kk->extension();
            $location = public_path('dokumen/sd/' . $namakk);
            Image::make($kk)->resize(900, 1200)->save($location);
            $attr['scan_kk'] = $namakk;
        }

        if ($request->hasFile('scan_kks')) {
            $kks = $request->file('scan_kks');
            $namakks = $request->nama_pd . "-scan-kks" . "." . $kks->extension();
            $location = public_path('dokumen/sd/' . $namakks);
            Image::make($kks)->resize(600, 400)->save($location);
            $attr['scan_kks'] = $namakks;
        }

        if ($request->hasFile('scan_kip')) {
            $kip = $request->file('scan_kip');
            $namakip = $request->nama_pd . "-scan-kip" . "." . $kip->extension();
            $location = public_path('dokumen/sd/' . $namakip);
            Image::make($kip)->resize(600, 400)->save($location);
            $attr['scan_kip'] = $namakip;
        }

        if ($request->hasFile('scan_kps')) {
            $kps = $request->file('scan_kps');
            $namakps = $request->nama_pd . "-scan-kps" . "." . $kps->extension();
            $location = public_path('dokumen/sd/' . $namakps);
            Image::make($kps)->resize(600, 400)->save($location);
            $attr['scan_kps'] = $namakps;
        }

        $form = new CalonSiswaSd($attr);

        $userId = Auth::id();
        $user = User::findOrFail($userId);

        $user->is_data_verified = $request->is_data_verified;

        if ($user->csSd()->save($form) != null) {
            $user->save();
        }

        session()->flash('masuk', 'Selamat! Data Anda telah ditambahkan ke dalam sistem dan akan diverifikasi');
        return redirect()->route('calon.sd');
    }

    public function update(Request $request, CalonSiswaSd $calon_siswa_sd)
    {
        $attr = $request->validate([
            //validasi pribadi
            'nama_pd' => 'required',
            'nik' => 'required|digits:16|unique:calon_siswa_sds,nik,except,id',
            'jenis_kelamin' => ['required', Rule::in('Laki-laki', 'Perempuan')],
            'nisn' => 'required|digits:10|unique:calon_siswa_sds,nisn,except,id',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'no_akta' => 'required|unique:calon_siswa_sds,no_akta,except,id',
            'anak_ke' => 'required|digits:2',
            'agama' => ['required', Rule::in(Agama::getValues())],
            'kewarganegaraan' => 'required',
            'kebutuhan_khusus' => ['required', Rule::in(KebutuhanKhusus::getValues())],
            'alamat_pd' => 'required',
            'rt' => 'required|digits:3',
            'rw' => 'required|digits:3',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'kabupaten' => 'required',
            'kode_pos' => 'required|digits:5',
            'lintang' => 'required',
            'bujur' => 'required',
            'moda_transportasi' => ['required', Rule::in(ModaTransportasi::getValues())],
            'jenis_tinggal' => 'required',
            'penerima_kip' => 'boolean',
            'no_kip' => 'required_if:penerima_kip,1|digits_between:0,18|unique:calon_siswa_sds,no_kip,except,id',
            'penerima_kks' => 'boolean',
            'no_kks' => 'required_if:penerima_kks,1|digits_between:0,18|unique:calon_siswa_sds,no_kks,except,id',
            'penerima_kps' => 'boolean',
            'no_kps' => 'required_if:penerima_kps,1|digits_between:0,18|unique:calon_siswa_sds,no_kps,except,id',

            //validasi kontak
            'telp_rumah' => 'required|digits:12',
            'telp_pd' => 'required|digits_between:11,15',

            //validasi orangtua
            'nama_ayah' => 'required',
            'tahun_lahir_ayah' => 'required|digits:4',
            'pendidikan_ayah' => ['required', Rule::in(Pendidikan::getValues())],
            'pekerjaan_ayah' => ['required', Rule::in(Pekerjaan::getValues())],
            'penghasilan_ayah' => ['required', Rule::in(Penghasilan::getValues())],

            'nama_ibu' => 'required',
            'tahun_lahir_ibu' => 'required|digits:4',
            'pendidikan_ibu' => ['required', Rule::in(Pendidikan::getValues())],
            'pekerjaan_ibu' => ['required', Rule::in(Pekerjaan::getValues())],
            'penghasilan_ibu' => ['required', Rule::in(Penghasilan::getValues())],

            'nama_wali',
            'tahun_lahir_wali' => 'required_with:nama_wali|digits:4',
            'pendidikan_wali' => ['required_with:nama_wali', Rule::in(Pendidikan::getValues())],
            'pekerjaan_wali' => ['required_with:nama_wali', Rule::in(Pekerjaan::getValues())],
            'penghasilan' => ['required_with:nama_wali', Rule::in(Penghasilan::getValues())],

            //validasi periodik
            'banyak_saudara_kandung' => 'required',
            'waktu_kesekolah' => 'required',
            'jarak_kesekolah' => 'required',
            'tinggi' => 'required',
            'berat' => 'required',

            //validasi asal sekolah
            'sekolah_asal' => 'required',
            'kecamatan_sekolah_asal' => 'required',
            'tahun_ajaran' => 'required|digits:4',

            //validasi dokumen
            'foto_pd' => 'required|mimes:jpg,png,jpeg',
            'scan_akta' => 'required|mimes:jpg,png,jpeg',
            'scan_kk' => 'required|mimes:jpg,png,jpeg',
            'scan_ijazah' => 'required|mimes:jpg,png,jpeg',
            'scan_kks' => 'required_if:penerima_kks,1|mimes:jpg,png,jpeg',
            'scan_kip' => 'required_if:penerima_kip,1|mimes:jpg,png,jpeg',
            'scan_kps' => 'required_if:penerima_kps,1|mimes:jpg,png,jpeg',
        ]);

        if ($request->hasFile('foto_pd')) {
            if(File::exists(public_path('dokumen/sd/' . $calon_siswa_sd->foto_pd))){
                File::delete(public_path('dokumen/sd/' . $calon_siswa_sd->foto_pd));
            }
            $foto = $request->file('foto_pd');
            $namafoto = $request->nama_pd . "-pas-foto" . "." . $foto->extension();
            $location = public_path('dokumen/sd/' . $namafoto);
            Image::make($foto)->resize(300, 400)->save($location);
            $attr['foto_pd'] = $namafoto;
        }

        if ($request->hasFile('scan_ijazah')) {
            if(File::exists(public_path('dokumen/sd/' . $calon_siswa_sd->scan_ijazah))){
                File::delete(public_path('dokumen/sd/' . $calon_siswa_sd->scan_ijazah));
            }
            $ijazah = $request->file('scan_ijazah');
            $namaijazah = $request->nama_pd . "-scan-ijazah" . "." . $ijazah->extension();
            $location = public_path('dokumen/sd/' . $namaijazah);
            Image::make($foto)->resize(900, 1200)->save($location);
            $attr['scan_ijazah'] = $namaijazah;
        }

        if ($request->hasFile('scan_akta')) {
            if(File::exists(public_path('dokumen/sd/' . $calon_siswa_sd->scan_akta))){
                File::delete(public_path('dokumen/sd/' . $calon_siswa_sd->scan_akta));
            }
            $akta = $request->file('scan_akta');
            $namaakta = $request->nama_pd . "-scan-akta" . "." . $akta->extension();
            $location = public_path('dokumen/sd/' . $namaakta);
            Image::make($akta)->resize(900, 1200)->save($location);
            $attr['scan_akta'] = $namaakta;
        }

        if ($request->hasFile('scan_kk')) {
            if(File::exists(public_path('dokumen/sd/' . $calon_siswa_sd->scan_kk))){
                File::delete(public_path('dokumen/sd/' . $calon_siswa_sd->scan_kk));
            }
            $kk = $request->file('scan_kk');
            $namakk = $request->nama_pd . "-scan-kk" . "." . $kk->extension();
            $location = public_path('dokumen/sd/' . $namakk);
            Image::make($kk)->resize(900, 1200)->save($location);
            $attr['scan_kk'] = $namakk;
        }

        if ($request->hasFile('scan_kks')) {
            if(File::exists(public_path('dokumen/sd/' . $calon_siswa_sd->scan_kks))){
                File::delete(public_path('dokumen/sd/' . $calon_siswa_sd->scan_kks));
            }
            $kks = $request->file('scan_kks');
            $namakks = $request->nama_pd . "-scan-kks" . "." . $kks->extension();
            $location = public_path('dokumen/sd/' . $namakks);
            Image::make($kks)->resize(600, 400)->save($location);
            $attr['scan_kks'] = $namakks;
        }

        if ($request->hasFile('scan_kip')) {
            if(File::exists(public_path('dokumen/sd/' . $calon_siswa_sd->scan_kip))){
                File::delete(public_path('dokumen/sd/' . $calon_siswa_sd->scan_kip));
            }
            $kip = $request->file('scan_kip');
            $namakip = $request->nama_pd . "-scan-kip" . "." . $kip->extension();
            $location = public_path('dokumen/sd/' . $namakip);
            Image::make($kip)->resize(600, 400)->save($location);
            $attr['scan_kip'] = $namakip;
        }

        if ($request->hasFile('scan_kps')) {
            if(File::exists(public_path('dokumen/sd/' . $calon_siswa_sd->scan_kps))){
                File::delete(public_path('dokumen/sd/' . $calon_siswa_sd->scan_kps));
            }
            $kps = $request->file('scan_kps');
            $namakps = $request->nama_pd . "-scan-kps" . "." . $kps->extension();
            $location = public_path('dokumen/sd/' . $namakps);
            Image::make($kps)->resize(600, 400)->save($location);
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

        return view('user.calon-sd.cetakbilling', [
            'user' => Auth::user(),
        ]);
    }
}
