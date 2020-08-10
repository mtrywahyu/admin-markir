<?php

namespace App\Http\Controllers;

use App\jukir;
use App\parkirkeluar;
use App\parkirmasuk;
use App\refbiaya;
use Illuminate\Http\Request;

class ParkirmkeluarController extends Controller
{
    public function parkirkeluar()
    {
        return view("/parkirkeluar");                                                                             
    }

    public function index()
    {
        $tb_parkir = parkirmasuk::all();
        $jukir=jukir::all();
        $refbiaya=refbiaya::all();
        return view('parkirmasuk',compact('tb_parkir','jukir','refbiaya'));

    }
}
