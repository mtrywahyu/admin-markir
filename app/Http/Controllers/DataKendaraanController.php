<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function datakendaraan()
    {
        return view("/datakendaraan");
    }
}
