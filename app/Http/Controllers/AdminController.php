<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Category;

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

    public function showProd(){
        $products = Product::with('category')->get();
        return view('productos', compact('products'));
    }

    public function modif(){
        return view('modificar');
    }

    public function ven(){
        return view('ventas');
    }
}
