<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\CalonSiswaSma;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class KelolaSmaController extends Controller
{

    public function index()
    {
        $calon_siswa_smas = CalonSiswaSma::paginate(10);

        return view('admin.sma.index', [
            'calon_siswa_smas' => $calon_siswa_smas,
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
                'no_registrasi' => $user->no_registrasi,
                'no_billing' => $no_billing,
            ]);
        }

        // dd($user->no_registrasi);


        $user->save();

        return redirect()->back();
    }

    public function tabelVerifikasi()
    {
        $calon_siswa_smas = CalonSiswaSma::paginate(10);

        return view('admin.sma.verifikasi', [
            'calon_siswa_smas' => $calon_siswa_smas,
        ]);
    }

    public function showData($id)
    {
        return view('admin.sma.show', [
            'pesertadidik' => User::find($id),
            'user' => Auth::user(),
        ]);
    }

    public function tabelVerifikasiValid()
    {
        return view('admin.sma.terverifikasi', [
            'calon_siswa_smas' => CalonSiswaSma::paginate(10),
        ]);
    }

    public function tabelVerifikasiTakValid()
    {
        return view('admin.sma.terverifikasisalah', [
            'calon_siswa_smas' => CalonSiswaSma::paginate(10),
        ]);
    }

    public function tabelBayar()
    {
        return view('admin.sma.tagihan', [
            'billings' => DB::table('billings')->join('calon_siswa_smas', 'calon_siswa_smas.user_id', '=', 'billings.user_id')->where('no_registrasi', 'LIKE', '001%')->paginate(10),
        ]);
    }
}
