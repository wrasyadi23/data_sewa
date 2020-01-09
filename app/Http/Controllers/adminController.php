<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kendaraan_data;
use App\kendaraan_sp;
// use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    public function index() {
        return view('admin/index');
    }

    public function dataKendaraan() {
        $kendaraan_data = kendaraan_data::all();
        return view('admin/dataKendaraan',['kendaraan_data'=>$kendaraan_data]);
    }

    public function dataSP() {
        $kendaraan_sp = kendaraan_sp::all()->groupBy('act');
        return view('admin/dataSP',['kendaraan_sp'=>$kendaraan_sp]);
    }

    public function tambah_kendaraan() {
        return view('admin/tambahKendaraan');
    }
}
