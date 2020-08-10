<?php

namespace App\Http\Controllers;

use App\info;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function info()
    {
        return view("/info");
    }

    public function index()
    {
        $ref_merk = info::all();

        return view("info",["info"=>$ref_merk]);
    }


    public function hapus($id_merk)
    {
        
        $ref_merk = info::find($id_merk);
        $ref_merk->delete();

        return redirect("/info");

    }

    public function store(Request $request)
    {
        // return $request;
        $this->validate($request,[
            'id_merk'=>'required',
            'merk'=>'required'
        ]);

        info::create([
            'id_merk' =>$request ->id_merk,
            'merk' =>$request ->merk
        ]);

        return redirect('/info');
    }
}
