<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Mail\VerifikasiDataNotification;
use App\Models\Billing;
use App\Models\CalonSiswaTk;
use App\Models\User;
use App\Notifications\VerifikasiDataTakValidNotification;
use App\Notifications\VerifikasiDataValidNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;

class KelolaTkController extends Controller
{

    public function index()
    {
        $calon_siswa_tks = CalonSiswaTk::paginate(6);

        return view('admin.tk.index', [
            'calon_siswa_tks' => $calon_siswa_tks,
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
        if ($request->is_data_verified == 2) 
        {
            $get_id = DB::SELECT("select no_registrasi from users where id='$id' ");
            $no_billing = date('Y') . $get_id[0]->no_registrasi;
            $biaya = 'Rp 1.000.000';

            DB::table('billings')->insert([
                'user_id' => $id,
                'no_registrasi' => $user->no_registrasi,
                'no_billing' => $no_billing,
                'biaya' => $biaya,
            ]);
            Notification::send($user, new VerifikasiDataValidNotification());
        }

       $user->save();

        session()->flash('verifikasi', 'Data telah diedit');
        return redirect()->route('verifikasi.tk');
    }

    public function tabelVerifikasi()
    {
        return view('admin.tk.verifikasi', [
            'calon_siswa_tks' => CalonSiswaTk::paginate(10),
            'user' => User::get(),
        ]);
    }

    public function showData($id)
    {
        return view('admin.tk.show', [
            'pesertadidik' => User::find($id),
            'user' => Auth::user(),
        ]);
    }

    public function tabelVerifikasiValid()
    {
        return view('admin.tk.terverifikasi', [
            'calon_siswa_tks' => CalonSiswaTk::paginate(10),
        ]);
    }

    public function tabelVerifikasiTakValid()
    {
        return view('admin.tk.terverifikasisalah', [
            'calon_siswa_tks' => CalonSiswaTk::paginate(10),
        ]);
    }

    public function tabelBayar()
    {
        return view('admin.tk.tagihan', [
            'billings' => DB::table('billings')->join('calon_siswa_tks', 'calon_siswa_tks.user_id', '=', 'billings.user_id')->where('no_registrasi', 'LIKE', '001%')->paginate(10),
        ]);
    }
}
