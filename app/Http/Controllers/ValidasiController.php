<?php

namespace App\Http\Controllers;

use App\validasi;
use Illuminate\Http\Request;

class ValidasiController extends Controller
{
    public function validasi(){
        return view("validasi");
    }

      //view datajukir
      public function validasijukir()
      {
          $user_jukir_biodata = validasi::all();
  
          return view ("validasi",["validasi"=>$user_jukir_biodata]);
      }
}
