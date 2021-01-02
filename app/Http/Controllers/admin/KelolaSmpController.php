<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\CalonSiswaSmp;
use App\Models\PrestasiDanBeasiswa;
use App\Models\User;
use App\Notifications\VerifikasiDataTakValidNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;

class KelolaSmpController extends Controller
{

    public function index()
    {
        $calon_siswa_smps = CalonSiswaSmp::paginate(10);

        return view('admin.smp.index', [
            'calon_siswa_smps' => $calon_siswa_smps,
        ]);
    }

    public function verifikasiData($id, Request $request)
    {
        // dd($request);

        $user = User::find($id);
        $user->is_data_verified = $request->is_data_verified;

        if($request->is_data_verified == 3)
        {            
            Notification::send($user, new VerifikasiDataTakValidNotification());
        }

        // generate no_biling
        if($request->is_data_verified == 2)
        {
            $get_id = DB::SELECT("select no_registrasi from users where id='$id' ");
            $no_billing = date('Y').$get_id[0]->no_registrasi;
            $biaya = 'Rp 3.000.000';
        
            DB::table('billings')->insert([
                'user_id' => $id,
                'no_registrasi' => $user->no_registrasi,
                'no_billing' => $no_billing,
                'biaya' => $biaya,
            ]);
        }

        $user->save();

        return redirect()->back();
    }

    public function tabelVerifikasi()
    {
        return view('admin.smp.verifikasi', [
            'prestasi' => PrestasiDanBeasiswa::get(),
            'calon_siswa_smps' => CalonSiswaSmp::paginate(10),
        ]);
    }

    public function showData($id)
    {
        return view('admin.smp.show', [
            'pesertadidik' => User::find($id),
            'prestasi' => PrestasiDanBeasiswa::get(),
            'user' => Auth::user(),
        ]);
    }

    public function tabelVerifikasiValid()
    {
        return view('admin.smp.terverifikasi', [
            'calon_siswa_smps' => CalonSiswaSmp::paginate(10),
        ]);
    }

    public function tabelVerifikasiTakValid()
    {
        return view('admin.smp.terverifikasisalah', [
            'calon_siswa_smps' => CalonSiswaSmp::paginate(10),
        ]);
    }

    public function tabelBayar()
    {
        return view('admin.smp.tagihan', [
            'billings' => DB::table('billings')->join('calon_siswa_smps', 'calon_siswa_smps.user_id', '=', 'billings.user_id')->where('no_registrasi', 'LIKE', '001%')->paginate(10),
        ]);
    }
}
