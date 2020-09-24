<?php

namespace App\Http\Controllers;

use App\parkirmasuk;
use App\UserBiodata;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function laporan()
    {
        $tb_parkir = parkirmasuk::all();
        // $userbiodata = UserBiodata::all() ->where("username",);
        // return $tb_parkir->first()->UserKendaraan->UserAkun->UserBiodata->nama;

        return view("laporan",["laporan"=>$tb_parkir]);
        // return $tb_parkir;
    }
}
