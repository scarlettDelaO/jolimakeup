<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Role;
use App\Models\Country;
use App\Models\Product;
use App\Models\Images;

class UserController extends Controller
{
    public function home(){
        return view('principal');
    }

    public function lo(){
    return view('login');
}


    public function regi(){
        return view('registro');
    }

    public function regUser(Request $request){

        $validatedData = $request->validate([
            'nom' => 'required|max:255', 
            'email' => 'required|email|max:255|unique:users', 
            'tel' => 'required|digits:10', 
            'pais' => 'required', 
            'direc' => 'required|max:255', 
            'contra' => 'required|min:8|max:16', 
        ]);
        
        $countryName = $request['pais']; 
        $country = Country::where('name', $countryName)->first();

        if ($country) {
            $countryId = $country->id;
            

            $user = new User;
            $user->role_id = 2;
            $user->name = $request['nom'];
            $user->email = $request['email'];
            $user->phone = $request['tel'];
            $user->country_id = $countryId; 
            $user->adress = $request['direc'];
            $user->password = bcrypt($request['contra']); 
            $user->save();

            $users = User::all();
            return view('perfil', compact('users'));

        } else {
            
            return back()->withErrors(['pais' => 'El JolyMakeup aún no esta disponible en tu país.']);
        }
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

    public function showOjos(){
        $productos = Product::with('images')->where('category_id', 1)->get();
        return view('ojos', compact('productos'));
    }

    public function showLabios(){
        $productos = Product::with('images')->where('category_id', 3)->get();
        return view('labios',compact('productos'));
    }

    public function showTools(){
        $productos = Product::with('images')->where('category_id', 4)->get();
        return view('tools',compact('productos'));
    }

    public function showRostro(){
        $productos = Product::with('images')->where('category_id', 2)->get();
        return view('rostro',compact('productos'));
    }
}
