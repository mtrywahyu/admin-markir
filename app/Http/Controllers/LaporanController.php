<?php

namespace App\Http\Controllers;

use App\parkirmasuk;
use App\UserBiodata;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        $userbiodata = userniodat::all();

        return view("laporan",["laporan"=>$tb_parkir]);
    }
}
