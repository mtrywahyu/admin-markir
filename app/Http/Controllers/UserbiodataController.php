<?php

namespace App\Http\Controllers;
use App\userbiodata;
use Illuminate\Http\Request;

class UserbiodataController extends Controller
{
    public function userbiodata()
    {
        return view("/userbiodata");
    }

    public function index()
    {
        $user_biodata = userbiodata::all();
        // return $user_biodata;
        return view('userbiodata',['userbiodata'=>$user_biodata]);

    }

    function simpan(Request $request){
        $userbiodata = userbiodata::where("username",$request->username)->first();
        // return $userbiodata;
    }
}
