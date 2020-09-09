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
        $parkir = parkirmasuk::all();
        $ref_jenis_kendaraan = refbiaya::all();
        $a=array();
        $b=array();
        $c=array();
        // return $parkir->first()->UserKendaraan->RefJenisKendaraan2;
        foreach($ref_jenis_kendaraan as $item){
            array_push($a,$item->jenis_kendaraan);
            $i = 0;
            foreach($parkir as $items){
                if($items->UserKendaraan->RefJenisKendaraan2->id_ref_kendaraan == $item->id_ref_kendaraan){
                    $i++;
                }
            }
            array_push($b, $i);
        }

        // foreach($jukir as $item){
        //     array_push($c,$item->jukir );
        //     $i = 0;
        //     foreach($userjukirbiodata as $items){
        //         if($items->UserKendaraan->RefJenisKendaraan2->id_ref_kendaraan == $item->id_ref_kendaraan){
        //             $i++;
        //         }
        //     }
        //     array_push($b, $i);
        // }

        // return $b;
        // return $a;
    return view("home",compact('jukir','terkini','riwayat','user_akun','a','b'));
    }
}
