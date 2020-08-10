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

        return view('userbiodata',['userbiodata'=>$user_biodata]);
    }
}
