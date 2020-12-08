<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class MenuController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        $products = Product::orderBy('id','DESC')->get();
        return view('menu', compact('products'));
    }

    public function show($id){
        $product = Product::where('id',$id)->first();
        return view('platillo', compact('product'));
    }
    
}

