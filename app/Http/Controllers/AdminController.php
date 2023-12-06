<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Category;
use App\Models\Sale;
use App\Models\Adress;





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

        $product=new Product;
        $product->name=$request->nombre;
        $product->color=$request->color;
        $product->brand=$request->marca;
        $product->texture=$request->textura;
        $product->content=$request->cont;
        $product->category_id = $request->cate;
        $product->price=$request->precio;

        $product->save();

        $product=Product::all();
        return redirect()->route('productos');

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
        $product = Product::find($id);
    return view('modificar', compact('product'));
    }
    
    public function update(Request $request,  $id){
        $validatedData = $request->validate([
            'nombre' => 'required|max:255',
            'color' => 'required',
            'marca' => 'required',
            'textura' => 'required',
            'cont' => 'required',
            'cate' => 'required',
            'precio' => 'required|numeric',
        ]);

        $product = Product::find($id);

        $product->name = $request->nombre;
        $product->color = $request->color;
        $product->brand = $request->marca;
        $product->texture = $request->textura;
        $product->content = $request->cont;
        $product->category_id = $request->cate;
        $product->price = $request->precio;

        $product->save();

        return redirect()->route('productos')->with('success', 'El producto ha sido modificado con éxito en la lista.');

}
    public function destroy( $id){

        $product = Product::find($id);
        $product->delete();

        return redirect()->route('productos');

    }



    public function ven(){
        return view('ventas');
    }

    public function showVen(){
        $sales = Sale::with('user', 'adress')->get();
        return view('ventas', compact('sales'));
    }

    public function buscarProductos(Request $request)
    {
        $query = $request->input('query');
        $resultados = Product::where('name', 'LIKE', "%$query%")
                            ->orWhere('color', 'LIKE', "%$query%")
                            ->orWhere('brand', 'LIKE', "%$query%")
                            ->orWhere('texture', 'LIKE', "%$query%")
                            ->orWhere('content', 'LIKE', "%$query%")
                            ->orWhere('price', 'LIKE', "%$query%")
                            ->get();

                            $products = $resultados->isEmpty() ? Product::all() : $resultados;

                            return view('productos', ['products' => $products]);

    }
}
