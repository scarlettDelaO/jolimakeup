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

    /*public function agregarIma(Request $request){
        $images = new Image;
        $images->url = $request->file('foto'); 
        $images->product_id = $product->id; 
        $images->save();
    }*/

    public function agregarPro(Request $request){

        $validatedData = $request->validate([
            'nombre' => 'required|max:255',
            'color' => 'required',
            'marca' => 'required',
            'textura' => 'required',
            'cont' => 'required',
            'cate' => 'required',
            'precio' => 'required|numeric',
        ]);

        $products=new Product;
        $products->name=$request->nombre;
        $products->color=$request->color;
        $products->brand=$request->marca;
        $products->texture=$request->textura;
        $products->content=$request->cont;
        $products->category_id = $request->cate;
        $products->price=$request->precio;

        $products->save();

        $products=Product::all();
        return redirect()->back()->with('success', 'Producto agregado con éxito');


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
    
    public function edit($id){
        $products = Product::findOrFail($id);
        return view('modificar', compact('products'));
    }
    
    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'nombre' => 'required|max:255',
            'color' => 'required',
            'marca' => 'required',
            'textura' => 'required',
            'cont' => 'required',
            'cate' => 'required',
            'precio' => 'required|numeric',
        ]);

        $products = Product::findOrFail($id);

        $products->name = $request->nombre;
        $products->color = $request->color;
        $products->brand = $request->marca;
        $products->texture = $request->textura;
        $products->content = $request->cont;
        $products->category_id = $request->cate;
        $products->price = $request->precio;

        $products->save();

        return redirect()->route('productos')->with('success', 'Producto actualizado con éxito');
}


    public function ven(){
        return view('ventas');
    }
}
