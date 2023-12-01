<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(){
        return view('login');
    }

    public function agre(){
        return view('agregar');
    }

    public function pro(){
        return view('productos');
    }

    public function modif(){
        return view('modificar');
    }
}
