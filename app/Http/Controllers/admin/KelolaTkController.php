<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\CalonSiswaTk;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        }

        // dd($user->no_registrasi);
        // $userId = Auth::id();

        

        $user->save();

        return redirect()->back();
    }

    public function tabelVerifikasi()
    {
        $calon_siswa_tks = CalonSiswaTk::paginate(10);

        return view('admin.tk.verifikasi', [
            'calon_siswa_tks' => $calon_siswa_tks,
        ]);
    }

    public function tabelBayar()
    {
        $calon_siswa_tks = CalonSiswaTk::paginate(10);

        return view('admin.tk.tagihan', [
            'calon_siswa_tks' => $calon_siswa_tks,
        ]);
    }
}
