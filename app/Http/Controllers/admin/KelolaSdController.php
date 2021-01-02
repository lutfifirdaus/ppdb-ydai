<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\CalonSiswaSd;
use App\Models\User;
use App\Notifications\VerifikasiDataTakValidNotification;
use App\Notifications\VerifikasiDataValidNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;

class KelolaSdController extends Controller
{

    public function index()
    {
        $calon_siswa_sds = CalonSiswaSd::paginate(10);

        return view('admin.sd.index', [
            'calon_siswa_sds' => $calon_siswa_sds,
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
            $biaya = 'Rp 2.000.000';

            DB::table('billings')->insert([
                'user_id' => $id,
                'no_registrasi' => $user->no_registrasi,
                'no_billing' => $no_billing,
                'biaya' => $biaya,
            ]);
            Notification::send($user, new VerifikasiDataValidNotification());
        }

        

        $user->save();

        return redirect()->back();
    }

    public function tabelVerifikasi()
    {
        $calon_siswa_sds = CalonSiswaSd::paginate(10);

        return view('admin.sd.verifikasi', [
            'calon_siswa_sds' => $calon_siswa_sds,
        ]);
    }

    public function showData($id)
    {

        return view('admin.sd.show', [
            'pesertadidik' => User::find($id),
            'user' => Auth::user(),
        ]);
    }

    public function tabelVerifikasiValid()
    {
        $calon_siswa_sds = CalonSiswaSd::paginate(10);

        return view('admin.sd.terverifikasi', [
            'calon_siswa_sds' => $calon_siswa_sds,
        ]);
    }

    public function tabelVerifikasiTakValid()
    {
        $calon_siswa_sds = CalonSiswaSd::paginate(10);

        return view('admin.sd.terverifikasisalah', [
            'calon_siswa_sds' => $calon_siswa_sds,
        ]);
    }
    public function tabelBayar()
    {
        return view('admin.sd.tagihan', [
            'billings' => DB::table('billings')->join('calon_siswa_sds', 'calon_siswa_sds.user_id', '=', 'billings.user_id')->where('no_registrasi', 'LIKE', '001%')->paginate(10),
        ]);
    }
}
