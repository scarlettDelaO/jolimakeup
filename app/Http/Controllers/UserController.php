<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Role;
use App\Models\Country;

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

    public function regUser(Request $request){


        $user = new User;
        $user->role_id = 2;
        $user->name = $request['nom'];
        $user->email = $request['email'];
        $user->phone=$request['tel'];
        $user->country_id=$request['pais'];
        $user->adress=$request['direc'];
        $user->contra=$request['contra'];
        $user->save();

        $user=User::all();
        return view('perfil',compact('users'));

    }


    public function per(){
        return view('perfil');
    }

    public function cate1(){
        return view('ojos');
    }

    public function cate2(){
        return view('rostro');
    }

    public function cate3(){
        return view('labios');
    }

    public function cate4(){
        return view('tools');
    }

    public function ate(){
        return view('atencion');
    }

    public function prueba(){
        return view('perfil');
    }

    public function car(){
        return view('carrito');
    }

    public function pay(){
        return view('pago');
    }
}
