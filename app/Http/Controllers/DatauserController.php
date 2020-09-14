<?php

namespace App\Http\Controllers;

use App\UserBiodata;
use Illuminate\Http\Request;

class DatauserController extends Controller
{

    public function datauser(){
        $userbiodata = UserBiodata::all();
        return view("datauser",["userbiodata"=>$userbiodata]);
    }
}
