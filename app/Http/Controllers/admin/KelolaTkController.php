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

        // generate no_biling
        if($request->is_data_verified == 2)
        {
            $get_id = DB::SELECT("select no_registrasi from users where id='$id' ");
            $no_billing = date('Y').$get_id[0]->no_registrasi;
        
            DB::table('billings')->insert([
                'user_id' => $id,
                'no_registrasi' => $user->no_registrasi,
                'no_billing' => $no_billing,
                ]);
            Notification::send($user, new VerifikasiDataValidNotification());
        } elseif($request->is_data_verified == 3){
            Notification::send($user, new VerifikasiDataTakValidNotification());
        }

        $user->save();
        return redirect()->back();
    }

    public function tabelVerifikasi()
    {
        $calon_siswa_tks = CalonSiswaTk::paginate(10);

        return view('admin.tk.verifikasi', [
            'calon_siswa_tks' => $calon_siswa_tks,
            'user' => User::get(),
            'billing' => Billing::get(),
        ]);
    }

    public function tabelVerifikasiValid()
    {
        $calon_siswa_tks = CalonSiswaTk::paginate(10);

        return view('admin.tk.terverifikasi', [
            'calon_siswa_tks' => $calon_siswa_tks,
        ]);
    }

    public function tabelVerifikasiTakValid()
    {
        $calon_siswa_tks = CalonSiswaTk::paginate(10);

        return view('admin.tk.terverifikasisalah', [
            'calon_siswa_tks' => $calon_siswa_tks,
        ]);
    }

    public function tabelBayar()
    {
        $calon_siswa_tks = CalonSiswaTk::paginate(10);

        return view('admin.tk.tagihan', [
            'get_tk' => CalonSiswaTk::get(),
            'user' => User::get(),
            'billing' => Billing::get(),
            'calon_siswa_tks' => $calon_siswa_tks,
        ]);
    }
}
