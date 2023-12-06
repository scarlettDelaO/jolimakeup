<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class productController extends Controller
{
    public function indexP(){
        $productosC=Product::all();
        return vie ('productos', compact('productos'))
    }
}
