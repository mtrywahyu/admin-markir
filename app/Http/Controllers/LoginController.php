<?php

namespace App\Http\Controllers;

use App\login;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('/login');
    }

    public function index()
    {
        $admin = login::first();

        return view('login',['login'=>$admin]);
    }

    public function getdata(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        $admin = login::where([['username',$username],['password',$password]])->count();
        
        
        // return $admin;


        if ($admin == '1') 
        {
            return redirect('/home');
        }
        else
        {
            
            return redirect('/login');
        }

       
    }
}
