<?php

namespace App\Http\Controllers;

use App\UserAkun;
use App\userbiodata;
use App\UserKendaraan;
use Illuminate\Http\Request;

class UserbiodataController extends Controller
{
    public function userbiodata()
    {
        return view("/userbiodata");
    }

    public function index()
    {
        $userAkun = UserAkun::all();
        $userKendaraan = UserKendaraan::all();
        // return $userKendaraan->where('username','4')->COUNT();
        // return $user_biodata;
        return view('userbiodata',compact('userAkun','userKendaraan'));

    }

    function simpan(Request $request){
        $userbiodata = userbiodata::where("username",$request->username)->first();
        // return $userbiodata;
    }
    function verifikasi($id,$status){
        $userakun = UserAkun::find($id);
        $userakun->status = $status;
        $userakun->save();
        if($status == "tolak"){
            $userakun->delete();
        }
        return redirect('/userbiodata');
    }
    function kendaraan($username){
        $kendaraan = UserKendaraan::all()->where('username',$username);
        $user = UserAkun::find($username);
        return view('user.user_kendaraan',compact('kendaraan','user'));
    }
    function verifikasiKendaraan($id,$status){
        $userKendaraan = UserKendaraan::find($id);
        $userKendaraan->status = $status;
        $userKendaraan->save();
        if($status == "tolak"){
            $userKendaraan->delete();
        }
        return redirect('/infokendaraan/'.$userKendaraan->username);
    }
}
