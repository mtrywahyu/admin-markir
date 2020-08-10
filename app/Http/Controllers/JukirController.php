<?php

namespace App\Http\Controllers;

use App\jukir;
use Illuminate\Http\Request;

class JukirController extends Controller
{
    public function jukir()
    {
        return view("/jukir");
    }

    //view datajukir
    public function index()
    {
        $user_jukir_biodata = jukir::all();

        return view ("jukir",["jukir"=>$user_jukir_biodata]);
    }

    // hapus sementara

    public function hapus($id)
    {
        $user_jukir_biodata = jukir::find($id);

        $user_jukir_biodata->delete();


        return redirect("/jukir");
    }



}
