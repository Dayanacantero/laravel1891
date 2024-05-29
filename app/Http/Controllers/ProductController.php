<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        $product = Product::orderBy('id', 'desc')->get();
        return view('producto.listar', compact('product'));
    
        

    }
    public function formulario(){

        return view('producto.product');
    }

    public function store(Request $request){

        $product= new Product();
        $product->name=$request->name;
        $product->price=$request->price;
        $product->descripcion=$request->descripcion;
        $product->cant=$request->cant;
        $product->date_exp=$request->date_exp;
        $product->save();
        return $product;
    }
}
