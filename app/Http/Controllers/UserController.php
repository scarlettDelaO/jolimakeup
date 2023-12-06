<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Role;
use App\Models\Country;

class UserController extends Controller
{
    public function home(){
        return view('principal');
    }

    public function lo(){
        return view('login');
    }

    public function iniciar(Request $request){
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Comprobar el role_id del usuario
            if (Auth::users()->role_id == 1) {
                // Admin
                return redirect()->route('productos');
            } else if (Auth::users()->role_id == 2) {
                // Usuario
                return redirect()->route('pago');
            }
        }

        return back()->withErrors([
            'email' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
        ]);
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
}
