<?php

namespace App\Http\Controllers;

use App\riwayat;
use Illuminate\Http\Request;

class RiwayatController extends Controller
{
    public function riwayat()
    {
        return view("/riwayat");
    }

    public function index()
    {
        $ref_parkir_keluar = riwayat::all();

        return view ("riwayat",["riwayat"=>$ref_parkir_keluar]);
    }
}
