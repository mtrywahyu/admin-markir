<?php

namespace App\Http\Controllers;

use App\infouser;
use App\refbiaya;
use App\UserKendaraan;
use Illuminate\Http\Request;

class InfouserController extends Controller
{
    public function infouser()
    {
        return view("/infouser");
    }

    public function index()
    {
        $user_kendaraan = UserKendaraan::first();

        // return $user_biodata;

        return view('infouser',['infouser'=>$user_kendaraan]);
    }

    public function showdata($username)
    {
        $user_kendaraan = UserKendaraan::all()->where('username',$username);
        // $user_kendaraan = ::all()->where('username',$username);
        // return $user_biodata;
        $refbiaya=refbiaya::all();
        return view('infouser',compact('user_kendaraan','refbiaya'));
    }

    
}
