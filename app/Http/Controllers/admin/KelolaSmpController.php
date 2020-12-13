<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\CalonSiswaSmp;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        // generate no_biling
        $get_id = DB::SELECT("select no_registrasi from users where id='$id' ");
        if($request->is_data_verified == 2)
        {
            $no_billing = date('Y').$get_id[0]->no_registrasi;
        } else {
            $no_billing = null;
        }

        // dd($user->no_registrasi);

        DB::table('billings')->insert([
            'no_registrasi' => $user->no_registrasi,
            'no_billing' => $no_billing,
        ]);

        $user->save();

        return redirect()->back();
    }

    public function tabelVerifikas()
    {
        $calon_siswa_smps = CalonSiswaSmp::paginate(10);

        return view('admin.smp.verifikasi', [
            'calon_siswa_smps' => $calon_siswa_smps,
        ]);
    }

    public function tabelBayar()
    {
        $calon_siswa_smps = CalonSiswaSmp::paginate(10);

        return view('admin.smp.verifikasi', [
            'calon_siswa_smps' => $calon_siswa_smps,
        ]);
    }
}
