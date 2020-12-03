<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\CalonSiswaSma;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class KelolaSmaController extends Controller
{

    public function index()
    {
        $calon_siswa_smas = CalonSiswaSma::paginate(10);
        // $columns = DB::getSchemaBuilder()->getColumnListing('calon_siswa_smas');

        return view('admin.sma.index', [
            // DB::getSchemaBuilder()->getColumnListing('calon_siswa_smas') => $columns,
            'calon_siswa_smas' => $calon_siswa_smas,
        ]);
    }

    public function verifikasiData()
    {
        return view('admin.sma.verifikasi', []);
    }
}
