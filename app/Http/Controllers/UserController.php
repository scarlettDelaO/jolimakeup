<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home(){
        return view('principal');
    }

    public function login(){
        return view('login');
    }

    public function regi(){
        return view('registro');
    }
    public function per(){
        return view('perfil');
    }

    public function cata(){
        return view('ojos');
    }

}
