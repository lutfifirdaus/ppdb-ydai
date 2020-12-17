<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Symfony\Component\Console\Input\Input;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show()
    {
        return view('user.daftar', ['user' => Auth::user()]);
    }

    /**
     * @param Request $request
     * @return
     */
    public function update(Request $request)
    {

        // dd($request);
        // Get current user
        $userId = Auth::id();
        $user = User::findOrFail($userId);

        $user->status = $request->status;

        //generate nomor billing
        $get_no_reg = DB::select('select no_registrasi from users 
        order by no_registrasi desc limit 1');

        if($request->status == 1){
            if(empty($get_no_reg)){
                $no_registrasi = '0010001'; 
            }else{
                $sub = substr($get_no_reg[0]->no_registrasi,4,3);
                $kode_last = (int) $sub;
                $kode = $kode_last + 1;
                if($kode < 10) // jika no surat satuan
                $no_registrasi ='001000'. $kode;
                else if($kode < 100) // jika no surat puluhan
                $no_registrasi = '00100'.$kode;
                else if($kode < 1000) // jika no surat ratusan
                $no_registrasi = '0010'.$kode;
                else 
                $no_registrasi = '001'.$kode;
            }
        } elseif($request->status == 2){
            if(empty($get_no_reg)){
                $no_registrasi = '0020001'; 
            }else{
                $sub = substr($get_no_reg[0]->no_registrasi,4,3);
                $kode_last = (int) $sub;
                $kode = $kode_last + 1;
                if($kode < 10) // jika no surat satuan
                $no_registrasi ='002000'. $kode;
                else if($kode < 100) // jika no surat puluhan
                $no_registrasi = '00200'.$kode;
                else if($kode < 1000) // jika no surat ratusan
                $no_registrasi = '0020'.$kode;
                else 
                $no_registrasi = '002'.$kode;
            }
        } elseif($request->status == 3){
            if(empty($get_no_reg)){
                $no_registrasi = '0030001'; 
            }else{
                $sub = substr($get_no_reg[0]->no_registrasi,4,3);
                $kode_last = (int) $sub;
                $kode = $kode_last + 1;
                if($kode < 10) // jika no surat satuan
                $no_registrasi ='003000'. $kode;
                else if($kode < 100) // jika no surat puluhan
                $no_registrasi = '00300'.$kode;
                else if($kode < 1000) // jika no surat ratusan
                $no_registrasi = '0030'.$kode;
                else 
                $no_registrasi = '003'.$kode;
            }
        } elseif($request->status == 4){
            if(empty($get_no_reg)){
                $no_registrasi = '0040001'; 
            }else{
                $sub = substr($get_no_reg[0]->no_registrasi,4,3);
                $kode_last = (int) $sub;
                $kode = $kode_last + 1;
                if($kode < 10) // jika no surat satuan
                $no_registrasi ='004000'. $kode;
                else if($kode < 100) // jika no surat puluhan
                $no_registrasi = '00400'.$kode;
                else if($kode < 1000) // jika no surat ratusan
                $no_registrasi = '0040'.$kode;
                else 
                $no_registrasi = '001'.$kode;
            }
        }

        $user->no_registrasi = $no_registrasi;

        // Save user to database
        $user->save();

        // Redirect to route
        if ($user->status == 4) {
            $user->assignRole('calon-sma');
            return redirect()->route('calon.sma');
        } elseif ($user->status == 3) {
            $user->assignRole('calon-smp');
            return redirect()->route('calon.smp');
        } elseif ($user->status == 2) {
            $user->assignRole('calon-sd');
            return redirect()->route('calon.sd');
        } elseif ($user->status == 1) {
            $user->assignRole('calon-tk');
            return redirect()->route('calon.tk');
        }
    }

}
