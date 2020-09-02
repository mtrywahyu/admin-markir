<?php

namespace App\Http\Controllers;

use App\jukir;
use App\parkirmasuk;
use App\refbiaya;
use App\UserAkun;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $jukir = jukir::all()->count();
        $terkini = parkirmasuk::where('stat_parkir','Parkir')->get()->count();
        $riwayat = parkirmasuk::all()->count();
        $user_akun = UserAkun::all()->count();
        $ref_jenis_kendaraan = refbiaya::all();
            foreach($ref_jenis_kendaraan as $item){
                
            }
        // return $ref_jenis_kendaraan;
    // return view("home",compact('jukir','terkini','riwayat','user_akun'));
    }
}
