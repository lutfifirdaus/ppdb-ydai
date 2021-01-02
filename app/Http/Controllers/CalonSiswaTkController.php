<?php

namespace App\Http\Controllers;

use App\Enums\{Agama,KebutuhanKhusus,ModaTransportasi,Pekerjaan,Pendidikan,Penghasilan,TempatTiggal,Tingkat};
use App\Models\CalonSiswaTk;
use App\Models\PrestasiDanBeasiswa;
use App\Models\User;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

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

        return view('user.calon-tk.formulir', [
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
        $userId = Auth::id();
        $user = User::findOrFail($userId);

        $attr = $request->validate([
            'nama_pd' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
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
            'kecamatan_pd' => 'required',
            'kabupaten_pd' => 'required',
            'provinsi_pd' => 'required',
            'telp_pd' => 'required|min:12,max:15',
            'tempat_tinggal' => 'required',
            'hobi' => 'required',
            'nama_ayah' => 'required',
            'tempat_lahir_ayah' => 'required',
            'tanggal_lahir_ayah' => 'required',
            'agama_ayah' => 'required',
            'kewarganegaraan_ayah' => 'required',
            'pendidikan_ayah' => 'required',
            'pekerjaan_ayah' => 'required',
            'nip_gol_pangkat_ayah' => 'required_if:pekerjaan_ayah,ABRI,Pegawai Negeri',
            'nama_kantor_instansi_ayah' => 'required_if:pekerjaan_ayah,ABRI,Pegawai Negeri',
            'alamat_kantor_no_telp_ayah' => 'required_with:pekerjaan_ayah',
            'nama_ibu' => 'required',
            'tempat_lahir_ibu' => 'required',
            'tanggal_lahir_ibu' => 'required',
            'agama_ibu' => 'required',
            'kewarganegaraan_ibu' => 'required',
            'pendidikan_ibu' => 'required',
            'pekerjaan_ibu' => 'required',
            'nip_gol_pangkat_ibu' => 'required_if:pekerjaan_ibu,ABRI,Pegawai Negeri',
            'nama_kantor_instansi_ibu' => 'required_if:pekerjaan_ibu,ABRI,Pegawai Negeri',
            'alamat_kantor_no_telp_ibu' => 'required_with:pekerjaan_ibu',
            'tempat_lahir_wali' => 'required_with:nama_wali',
            'tanggal_lahir_wali' => 'required_with:nama_wali',
            'agama_wali' => 'required_with:nama_wali',
            'kewarganegaraan_wali' => 'required_with:nama_wali',
            'pendidikan_wali' => 'required_with:nama_wali',
            'pekerjaan_wali' => 'required_with:nama_wali',
            'nip_gol_pangkat_wali' => 'required_if:pekerjaan_wali,ABRI,Pegawai Negeri',
            'nama_kantor_instansi_wali' => 'required_if:pekerjaan_wali,ABRI,Pegawai Negeri',
            'alamat_kantor_no_telp_wali' => 'required_with:pekerjaan_wali',
            'gaji_perbulan' => 'required',
            'jemputan' => 'required',
            'email' => 'required|unique:calon_siswa_tks',
            'scan_akta' => 'required|mimes:jpg,png,jpeg',
            'scan_kk' => 'required|mimes:jpg,png,jpeg',
            'scan_ktp_ortu' => 'required|mimes:jpg,png,jpeg',
        ]);
        

        $attr['penyakit'] = $request->penyakit;
        $attr['nama_wali'] = $request->nama_wali;
        
        if ($request->hasFile('scan_akta')) {
            $akta = $request->file('scan_akta');
            $namaakta = $user->no_registrasi . "-scan-akta" . "." . $akta->extension();
            $location = public_path('dokumen/tk/' . $namaakta);
            Image::make($akta)->resize(900, 1200)->save($location);
            $attr['scan_akta'] = $namaakta;
        }

        if ($request->hasFile('scan_kk')) {
            $kk = $request->file('scan_kk');
            $namakk = $user->no_registrasi . "-scan-kk" . "." . $kk->extension();
            $location = public_path('dokumen/tk/' . $namakk);
            Image::make($kk)->resize(900, 1200)->save($location);
            $attr['scan_kk'] = $namakk;
        }        
        
        if ($request->hasFile('scan_ktp_ortu')) {
            $ktp = $request->file('scan_ktp_ortu');
            $namaktp = $user->no_registrasi . "-scan-ktp-ortu" . "." . $ktp->extension();
            $location = public_path('dokumen/tk/' . $namaktp);
            Image::make($ktp)->resize(600, 400)->save($location);
            $attr['scan_ktp_ortu'] = $namaktp;
        }

        $form = new CalonSiswaTk($attr);
        
        $user->is_data_verified = $request->is_data_verified;
        
        if($user->csTk()->save($form) != null){
            $user->save();
        };

        session()->flash('masuk', 'Selamat! Data Anda telah ditambahkan ke dalam sistem dan akan diverifikasi');
        return redirect()->route('calon.tk');
    }

    public function update(Request $request, CalonSiswaTk $calon_siswa_tk)
    {
        

        $userId = Auth::id();
        $user = User::findOrFail($userId);
        
        $attr = $request->validate([
            'nama_pd' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
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
            'kecamatan_pd' => 'required',
            'kabupaten_pd' => 'required',
            'provinsi_pd' => 'required',
            'telp_pd' => 'required|min:12,max:15',
            'tempat_tinggal' => 'required',
            'hobi' => 'required',
            'nama_ayah' => 'required',
            'tempat_lahir_ayah' => 'required',
            'tanggal_lahir_ayah' => 'required',
            'agama_ayah' => 'required',
            'kewarganegaraan_ayah' => 'required',
            'pendidikan_ayah' => 'required',
            'pekerjaan_ayah' => 'required',
            'nip_gol_pangkat_ayah' => 'required_if:pekerjaan_ayah,ABRI,Pegawai Negeri',
            'nama_kantor_instansi_ayah' => 'required_if:pekerjaan_ayah,ABRI,Pegawai Negeri',
            'alamat_kantor_no_telp_ayah' => 'required_with:pekerjaan_ayah',
            'nama_ibu' => 'required',
            'tempat_lahir_ibu' => 'required',
            'tanggal_lahir_ibu' => 'required',
            'agama_ibu' => 'required',
            'kewarganegaraan_ibu' => 'required',
            'pendidikan_ibu' => 'required',
            'pekerjaan_ibu' => 'required',
            'nip_gol_pangkat_ibu' => 'required_if:pekerjaan_ibu,ABRI,Pegawai Negeri',
            'nama_kantor_instansi_ibu' => 'required_if:pekerjaan_ibu,ABRI,Pegawai Negeri',
            'alamat_kantor_no_telp_ibu' => 'required_with:pekerjaan_ibu',
            'tempat_lahir_wali' => 'required_with:nama_wali',
            'tanggal_lahir_wali' => 'required_with:nama_wali',
            'agama_wali' => 'required_with:nama_wali',
            'kewarganegaraan_wali' => 'required_with:nama_wali',
            'pendidikan_wali' => 'required_with:nama_wali',
            'pekerjaan_wali' => 'required_with:nama_wali',
            'nip_gol_pangkat_wali' => 'required_if:pekerjaan_wali,ABRI,Pegawai Negeri',
            'nama_kantor_instansi_wali' => 'required_if:pekerjaan_wali,ABRI,Pegawai Negeri',
            'alamat_kantor_no_telp_wali' => 'required_with:pekerjaan_wali',
            'gaji_perbulan' => 'required',
            'jemputan' => 'required',
            'email' => 'required|email',
            'scan_akta' => 'mimes:jpg,png,jpeg',
            'scan_kk' => 'mimes:jpg,png,jpeg',
            'scan_ktp_ortu' => 'mimes:jpg,png,jpeg',
        ]);

        $attr['penyakit'] = $request->penyakit;
        $attr['nama_wali'] = $request->nama_wali;
        
        if ($request->hasFile('scan_akta')) {
            if(File::exists(public_path('dokumen/tk/' . $calon_siswa_tk->scan_akta))){
                File::delete(public_path('dokumen/tk/' . $calon_siswa_tk->scan_akta));
            }
            $akta = $request->file('scan_akta');
            $namaakta = $user->no_registrasi . "-scan-akta" . "." . $akta->extension();
            $location = public_path('dokumen/tk/' . $namaakta);
            Image::make($akta)->resize(900, 1200)->save($location);
            $attr['scan_akta'] = $namaakta;
        }

        if ($request->hasFile('scan_kk')) {
            if(File::exists(public_path('dokumen/tk/' . $calon_siswa_tk->scan_kk))){
                File::delete(public_path('dokumen/tk/' . $calon_siswa_tk->scan_kk));
            }
            File::delete($calon_siswa_tk->scan_kk);
            $kk = $request->file('scan_kk');
            $namakk = $user->no_registrasi . "-scan-kk" . "." . $kk->extension();
            $location = public_path('dokumen/tk/' . $namakk);
            Image::make($kk)->resize(900, 1200)->save($location);
            $attr['scan_kk'] = $namakk;
        }        
        
        if ($request->hasFile('scan_ktp_ortu')) {
            if(File::exists(public_path('dokumen/tk/' . $calon_siswa_tk->scan_ktp_ortu))){
                File::delete(public_path('dokumen/tk/' . $calon_siswa_tk->scan_ktp_ortu));
            }
            File::delete($calon_siswa_tk->scan_ktp_ortu);
            $ktp = $request->file('scan_ktp_ortu');
            $namaktp = $user->no_registrasi . "-scan-ktp-ortu" . "." . $ktp->extension();
            $location = public_path('dokumen/tk/' . $namaktp);
            Image::make($ktp)->resize(600, 400)->save($location);
            $attr['scan_ktp_ortu'] = $namaktp;
        }

        $user->is_data_verified = $request->is_data_verified;

        if($user->csTk()->update($attr) != null){
            $user->save();
        }

        session()->flash('edit', 'Tunggu ya! Data Anda akan kembali Kita cek.');
        return redirect()->route('calon.tk');
    }

    public function billing()
    {
        return view('user.calon-tk.cetakbilling', [
            'user' => Auth::user(),
        ]);
    }
}
