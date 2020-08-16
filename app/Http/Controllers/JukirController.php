<?php

namespace App\Http\Controllers;

use App\parkirmasuk;
use App\refbiaya;
use App\UserJukir;
use Illuminate\Http\Request;

class JukirController extends Controller
{

    //view datajukir
    public function index()
    {
        $jukir = UserJukir::all();
        // return $jukir->first()->UserJukirBiodata;
        return view("jukir",compact('jukir'));
    }
    //edit
    function edit($username){
        $jukir = UserJukir::all()->where("id",$username)->first();
        // return $jukir;
        return view("datavalidasi",compact('jukir'));
    }

    //save hasil verifikasi
    function simpan(Request $request){
        $jukir = UserJukir::where("username",$request->username)->first();
        // return $jukir;
        $jukir->status = "Y";
        $jukir->save();
        return redirect("/jukir");
    }

    // hapus sementara

    public function hapus($username)
    {
        $jukir = UserJukir::where("username",$username)->first();
        $jukir->delete();
        return redirect("/jukir");
    }

    //lihat mapsnya jukir
    function showJukir($username){
        $parkirmasuk   = parkirmasuk::all()->where("stat_parkir","Sudah")->where('jukir',$username);
        $refbiaya=refbiaya::all();
        return view("jukirParkir",compact('parkirmasuk','refbiaya','username'));
        
    }



}
