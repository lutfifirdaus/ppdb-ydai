<?php

namespace App\Http\Controllers;

use App\Enums\{Agama, KebutuhanKhusus, ModaTransportasi, Pekerjaan, Pendidikan, Penghasilan, TempatTiggal, Tingkat};
use App\Models\CalonSiswaSmp;
use App\Models\PrestasiDanBeasiswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;

class CalonSiswaSmpController extends Controller
{
    public function index()
    {
        return view('user.calon-smp.index', [
            'user' => Auth::user(),
        ]);
    }

    public function create()
    {

        return view('user.calon-smp.formulir', [
            'user' => Auth::user(),
            'prestasi' => PrestasiDanBeasiswa::get(),
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
        // dd($request);

        $attr = $request->validate([
            //validasi anak
            'nama_pd' => 'required',
            'nisn' => 'required|unique:calon_siswa_smps,nisn,except,id|digits:10',
            'nik' => 'required|unique:calon_siswa_smps,nik,except,id|digits:16',
            'no_kk' => 'required',
            'no_akta' => 'required|unique:calon_siswa_smps,no_akta,except,id',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'kewarganegaraan' => 'required',
            'kebutuhan_khusus' => ['required', Rule::in(KebutuhanKhusus::getValues())],
            'jenis_kelamin' => ['required', Rule::in('Laki-laki', 'Perempuan')],
            'agama' => ['required', Rule::in(Agama::getValues())],
            'alamat_pd' => 'required',
            'rt' => 'required|digits:3',
            'rw' => 'required|digits:3',
            'dusun' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'kode_pos' => 'required|digits:5',
            'lintang' => 'required',
            'bujur' => 'required',
            'tempat_tinggal' => ['required', Rule::in(TempatTiggal::getValues())],
            'moda_transportasi' => ['required', Rule::in(ModaTransportasi::getValues())],
            'anak_ke' => 'required|numeric',
            'punya_kip' => 'required|boolean',
            'tetap_menerima_kip' => 'required|boolean',
            'alasan_menolak_pip' => ['required', Rule::in('Dilarang Pemda karena menerima bantuan serupa', 'Menolak', 'Sudah mampu')],

            //validasi ayah
            'nama_ayah' => 'required',
            'nik_ayah' => 'required',
            'lahir_ayah' => 'required',
            'pendidikan_ayah' => ['required', Rule::in(Pendidikan::getValues())],
            'pekerjaan_ayah' => ['required', Rule::in(Pekerjaan::getValues())],
            'penghasilan_ayah' => ['required', Rule::in(Penghasilan::getValues())],
            'kebutuhan_khusus_ayah' => ['required', Rule::in(KebutuhanKhusus::getValues())],

            //validasi ibu
            'nama_ibu' => 'required',
            'nik_ibu' => 'required',
            'lahir_ibu' => 'required',
            'pendidikan_ibu' => ['required', Rule::in(Pendidikan::getValues())],
            'pekerjaan_ibu' => ['required', Rule::in(Pekerjaan::getValues())],
            'penghasilan_ibu' => ['required', Rule::in(Penghasilan::getValues())],
            'kebutuhan_khusus_ibu' => ['required', Rule::in(KebutuhanKhusus::getValues())],

            //validasi wali
            'nama_wali',
            'nik_wali' => 'required_with:nama_wali_with:nama_wali',
            'lahir_wali' => 'required_with:nama_wali',
            'pendidikan_wali' => ['required_with:nama_wali', Rule::in(Pendidikan::getValues())],
            'pekerjaan_wali' => ['required_with:nama_wali', Rule::in(Pekerjaan::getValues())],
            'penghasilan_wali' => ['required_with:nama_wali', Rule::in(Penghasilan::getValues())],

            //validasi kontak
            'no_telp_rumah' => 'required|max:11',
            'no_hp' => 'required|digits_between:min:11,max:15',
            'email' => 'required|email',

            //validasi data periodik
            'tinggi' => 'required|numeric|digits:3',
            'berat' => 'required|numeric|digits:3',
            'lingkar_kepala' => 'required|numeric|digits:3',
            'waktu_kesekolah' => 'required',
            'jarak_kesekolah' => ['required', Rule::in('Kurang dari 1 Km', 'Lebih dari 1 Km')],
            'rincian_jarak' => 'required|digits:3',
            'banyak_saudara_kandung' => 'required|digits:2|numeric',

            //validasi kesejahteraan
            'jenis_kartu' => [Rule::in('PKH', 'PIP', 'Kartu Perlindungan Sosial', 'Kartu Keluarga Sejahtera', 'Kartu Kesehatan')],
            'no_kartu' => 'numeric|required_with:jenis_kartu',
            'nama_dikartu' => 'required_with:jenis_kartu',

            //validasi registrasi
            'kompetensi_keahlian' => 'required',
            'jenis_pendaftaran' => ['required', Rule::in('Siswa baru', 'Pindahan', 'Kembali bersekolah')],
            'nis' => 'required|numeric|digits:10',
            'tgl_masuk' => 'required',
            'asal_sekolah' => 'required',
            'no_un' => 'required|digits:20',
            'no_ijazah' => 'required|digits:16',
            'no_skhun' => 'required|digits:16',

            //validasi dokumen
            'foto_pd' => 'required|mimes:jpg,jpeg,png,bmp',
            'scan_ijazah' => 'required|mimes:jpg,jpeg,png,bmp',
            'scan_skhun' => 'required|mimes:jpg,jpeg,png,bmp',

        ]);

        if ($request->hasFile('foto_pd')) {
            $foto = $request->file('foto_pd');
            $namafoto = $request->nisn . "-pas-foto" . "." . $foto->extension();
            $location = public_path('dokumen/smp/' . $namafoto);
            Image::make($foto)->resize(300, 400)->save($location);
            $attr['foto_pd'] = $namafoto;
        }

        if ($request->hasFile('scan_ijazah')) {
            $ijazah = $request->file('scan_ijazah');
            $namaijazah = $request->nisn . "-scan-ijazah" . "." . $ijazah->extension();
            $location = public_path('dokumen/smp/' . $namaijazah);
            Image::make($foto)->resize(700, 1200)->save($location);
            $attr['scan_ijazah'] = $namaijazah;
        }

        if ($request->hasFile('scan_skhun')) {
            $skhun = $request->file('scan_skhun');
            $namaskhun = $request->nisn . "-scan-skhun" . "." . $skhun->extension();
            $location = public_path('dokumen/smp/' . $namaskhun);
            Image::make($skhun)->resize(700, 1200)->save($location);
            $attr['scan_skhun'] = $namaskhun;
        }

        $attr2 = $request->only(['jenis_prestasi', 'tingkat', 'nama_prestasi', 'tahun', 'penyelenggara', 'jenis_beasiswa', 'keterangan', 'tahun_mulai', 'tahun_selesai']);

        $userId = Auth::id();
        $user = User::findOrFail($userId);

        $user->is_data_verified = $request->is_data_verified;
        // dd($request);

        $prestasi = new PrestasiDanBeasiswa($attr2);
        $form = new CalonSiswaSmp($attr);

        if ($user->csSmp()->save($form) != null) {
            $user->prestasi()->save($prestasi);
            $user->save();
        }

        session()->flash('masuk', 'Selamat! Data Anda telah ditambahkan ke dalam sistem dan akan diverifikasi');
        return redirect()->route('calon.smp');
    }

    public function update(Request $request, CalonSiswaSmp $calon_siswa_smp)
    {
        // dd($request);

        $attr = $request->validate([
            //validasi anak
            'nama_pd' => 'required',
            'nisn' => 'required|unique:calon_siswa_smps,nisn,except,id|digits:10',
            'nik' => 'required|unique:calon_siswa_smps,nik,except,id|digits:16',
            'no_kk' => 'required',
            'no_akta' => 'required|unique:calon_siswa_smps,no_akta,except,id',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'kewarganegaraan' => 'required',
            'kebutuhan_khusus' => ['required', Rule::in(KebutuhanKhusus::getValues())],
            'jenis_kelamin' => ['required', Rule::in('Laki-laki', 'Perempuan')],
            'agama' => ['required', Rule::in(Agama::getValues())],
            'alamat_pd' => 'required',
            'rt' => 'required|digits:3',
            'rw' => 'required|digits:3',
            'dusun' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'kode_pos' => 'required|digits:5',
            'lintang' => 'required',
            'bujur' => 'required',
            'tempat_tinggal' => ['required', Rule::in(TempatTiggal::getValues())],
            'moda_transportasi' => ['required', Rule::in(ModaTransportasi::getValues())],
            'anak_ke' => 'required|numeric',
            'punya_kip' => 'required|boolean',
            'tetap_menerima_kip' => 'required|boolean',
            'alasan_menolak_pip' => ['required', Rule::in('Dilarang Pemda karena menerima bantuan serupa', 'Menolak', 'Sudah mampu')],

            //validasi ayah
            'nama_ayah' => 'required',
            'nik_ayah' => 'required',
            'lahir_ayah' => 'required',
            'pendidikan_ayah' => ['required', Rule::in(Pendidikan::getValues())],
            'pekerjaan_ayah' => ['required', Rule::in(Pekerjaan::getValues())],
            'penghasilan_ayah' => ['required', Rule::in(Penghasilan::getValues())],
            'kebutuhan_khusus_ayah' => ['required', Rule::in(KebutuhanKhusus::getValues())],

            //validasi ibu
            'nama_ibu' => 'required',
            'nik_ibu' => 'required',
            'lahir_ibu' => 'required',
            'pendidikan_ibu' => ['required', Rule::in(Pendidikan::getValues())],
            'pekerjaan_ibu' => ['required', Rule::in(Pekerjaan::getValues())],
            'penghasilan_ibu' => ['required', Rule::in(Penghasilan::getValues())],
            'kebutuhan_khusus_ibu' => ['required', Rule::in(KebutuhanKhusus::getValues())],

            //validasi wali
            'nama_wali',
            'nik_wali' => 'required_with:nama_wali_with:nama_wali',
            'lahir_wali' => 'required_with:nama_wali',
            'pendidikan_wali' => ['required_with:nama_wali', Rule::in(Pendidikan::getValues())],
            'pekerjaan_wali' => ['required_with:nama_wali', Rule::in(Pekerjaan::getValues())],
            'penghasilan_wali' => ['required_with:nama_wali', Rule::in(Penghasilan::getValues())],

            //validasi kontak
            'no_telp_rumah' => 'required|max:11',
            'no_hp' => 'required|digits_between:min:11,max:15',
            'email' => 'required|email',

            //validasi data periodik
            'tinggi' => 'required|numeric|digits:3',
            'berat' => 'required|numeric|digits:3',
            'lingkar_kepala' => 'required|numeric|digits:3',
            'waktu_kesekolah' => 'required',
            'jarak_kesekolah' => ['required', Rule::in('Kurang dari 1 Km', 'Lebih dari 1 Km')],
            'rincian_jarak' => 'required|digits:3',
            'banyak_saudara_kandung' => 'required|digits:2|numeric',

            //validasi kesejahteraan
            'jenis_kartu' => [Rule::in('PKH', 'PIP', 'Kartu Perlindungan Sosial', 'Kartu Keluarga Sejahtera', 'Kartu Kesehatan')],
            'no_kartu' => 'numeric|required_with:jenis_kartu',
            'nama_dikartu' => 'required_with:jenis_kartu',

            //validasi registrasi
            'kompetensi_keahlian' => 'required',
            'jenis_pendaftaran' => ['required', Rule::in('Siswa baru', 'Pindahan', 'Kembali bersekolah')],
            'nis' => 'required|numeric|digits:10',
            'tgl_masuk' => 'required',
            'asal_sekolah' => 'required',
            'no_un' => 'required|digits:20',
            'no_ijazah' => 'required|digits:16',
            'no_skhun' => 'required|digits:16',

            //validasi dokumen
            'foto_pd' => 'required|mimes:jpg,jpeg,png,bmp',
            'scan_ijazah' => 'required|mimes:jpg,jpeg,png,bmp',
            'scan_skhun' => 'required|mimes:jpg,jpeg,png,bmp',

        ]);

        // $attr['nama_wali'] = $request->nama_wali;
        // $attr['pekerjaan_wali'] = $request->pekerjaan_wali;

        if ($request->hasFile('foto_pd')) {
            if (File::exists(public_path('dokumen/smp/' . $calon_siswa_smp->foto_pd))) {
                File::delete(public_path('dokumen/smp/' . $calon_siswa_smp->foto_pd));
            }
            $foto = $request->file('foto_pd');
            $namafoto = $request->nisn . "-pas-foto" . "." . $foto->extension();
            $location = public_path('dokumen/smp/' . $namafoto);
            Image::make($foto)->resize(300, 400)->save($location);
            $attr['foto_pd'] = $namafoto;
        }

        if ($request->hasFile('scan_ijazah')) {
            if (File::exists(public_path('dokumen/smp/' . $calon_siswa_smp->scan_ijazah))) {
                File::delete(public_path('dokumen/smp/' . $calon_siswa_smp->scan_ijazah));
            }
            $ijazah = $request->file('scan_ijazah');
            $namaijazah = $request->nisn . "-scan-ijazah" . "." . $ijazah->extension();
            $location = public_path('dokumen/smp/' . $namaijazah);
            Image::make($foto)->resize(700, 1200)->save($location);
            $attr['scan_ijazah'] = $namaijazah;
        }

        if ($request->hasFile('scan_skhun')) {
            if (File::exists(public_path('dokumen/smp/' . $calon_siswa_smp->scan_skhun))) {
                File::delete(public_path('dokumen/smp/' . $calon_siswa_smp->scan_skhun));
            }
            $skhun = $request->file('scan_skhun');
            $namaskhun = $request->nisn . "-scan-skhun" . "." . $skhun->extension();
            $location = public_path('dokumen/smp/' . $namaskhun);
            Image::make($skhun)->resize(700, 1200)->save($location);
            $attr['scan_skhun'] = $namaskhun;
        }

        $attr2 = $request->only(['jenis_prestasi', 'tingkat', 'nama_prestasi', 'tahun', 'penyelenggara', 'jenis_beasiswa', 'keterangan', 'tahun_mulai', 'tahun_selesai']);

        $userId = Auth::id();
        $user = User::findOrFail($userId);

        $user->is_data_verified = $request->is_data_verified;
        // dd($request);

        $prestasi = new PrestasiDanBeasiswa($attr2);
        $form = new CalonSiswaSmp($attr);

        if ($user->csSmp()->update($attr) != null) {
            $user->prestasi()->sync($attr2);
            $user->push();
        }

        session()->flash('edit', 'Tunggu ya! Data Anda akan kembali Kita cek.');
        return redirect()->route('calon.smp');
    }

    public function billing()
    {
        return view('user.calon-smp.cetakbilling', [
            'user' => Auth::user(),
        ]);
    }
}
