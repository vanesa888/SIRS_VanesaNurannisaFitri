<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Str;

class loginController extends Controller
{
  
    public function login()
    {
       return view('login.login');  
    }

    public function registrasi()
    {
       return view('login.registrasi');  
    }

    public function simpanregistrasi(Request $request)
    {
    //    dd($request->all());
    User::create([
        'name'=>$request->name,
        'level'=>'pasien',
        'email'=>$request->email,
        'password'=>bcrypt($request->password),
        'remember_token'=>Str::random(60),
    ]); 

        return view('home'); 

    }
    public function postlogin(Request $request)
    {
    //    dd($request->all());
    User::create([
        'name'=>$request->name,
        'level'=>'pasien',
        'email'=>$request->email,
        'password'=>bcrypt($request->password),
        'remember_token'=>Str::random(60),
    ]); 

        return view('home'); 

    }
    

 
}
