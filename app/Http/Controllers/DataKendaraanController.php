<?php

namespace App\Http\Controllers;

use App\parkirmasuk;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class DatakendaraanController extends Controller
{
    public function datakendaraan()
    {
        return view("/datakendaraan");
    }

    public function index()
    {
        $tb_parkir = parkirmasuk::all();

        return view("datakendaraan",["datakendaraan"=>$tb_parkir]);
    }
}
