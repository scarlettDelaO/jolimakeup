<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
        
                return redirect()->intended('perfil'); // Redirige al perfil del usuario autenticado
            }
        }

        return back()->withErrors([
            'message' => 'Correo o contraseña incorrectos, por favor intente de nuevo.',
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

           Auth::login($user);
           return redirect('perfil');

            //return view('perfil', compact('users'));

        } else {
            
            return back()->withErrors(['pais' => 'El JolyMakeup aún no esta disponible en tu país.']);
        }
    }


    public function per(){
        $user = Auth::user();
        $user->load('country');
        return view('perfil', compact('user'));
    }


    public function edit($id){
        $user = User::find($id);
        return view('modificar', compact('user'));
    }
    
    public function update(Request $request,  $id){
        $validatedData = $request->validate([
            'nom' => 'required|max:255', 
            'email' => 'required|email|max:255|unique:users', 
            'tel' => 'required|digits:10', 
            'pais' => 'required', 
            'direc' => 'required|max:255', 
            'contra' => 'required|min:8|max:16', 
        ]);

        $user = User::find($id);

            $user->name = $request['nom'];
            $user->email = $request['email'];
            $user->phone = $request['tel'];
            $user->country_id = $countryId; 
            $user->adress = $request['direc'];
            $user->password = $request['contra']; 
            $user->save();

    

        return redirect()->route('perfil')->with('success', 'Tus cambios se han guardado exitosamente. Tu perfil ha sido actualizado.');

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
