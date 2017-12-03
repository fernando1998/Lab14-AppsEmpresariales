<?php

namespace App\Http\Controllers;
use App\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function index(){

        $product = Product::all();
        $datos = array('productos' => $product);
        return view('index',$datos);


    }

    public function show($id)
    {
        $productos = Product::find($id);
        $datos = array('producto' => $productos);
        return view('detail',$datos);
    }
}
