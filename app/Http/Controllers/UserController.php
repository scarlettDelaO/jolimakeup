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

    public function lo(){
    return view('login');
}


    public function regi(){
        return view('registro');
    }

    public function regUser(Request $request)
    {
        // Obtener el ID del país basado en el nombre ingresado
        $countryName = $request['pais']; // Asumiendo que 'pais' es el campo del formulario
        $country = Country::where('name', $countryName)->first();

        if ($country) {
            $countryId = $country->id;
            // Continuar con la lógica de inserción del usuario

            $user = new User;
            $user->role_id = 2;
            $user->name = $request['nom'];
            $user->email = $request['email'];
            $user->phone = $request['tel'];
            $user->country_id = $countryId; // Usar el ID del país
            $user->adress = $request['direc'];
            $user->password = bcrypt($request['contra']); // Asegúrate de encriptar la contraseña
            $user->save();

            $users = User::all();
            return view('perfil', compact('users'));

        } else {
            // Manejar el caso en que el país no se encuentre
            return back()->withErrors(['pais' => 'El país ingresado no es válido.']);
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
