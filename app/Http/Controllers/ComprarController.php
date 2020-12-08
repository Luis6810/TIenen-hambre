<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ComprarController extends Controller
{
    public function index($id){
        $product = Product::where('id',$id)->first();
        return view('comprar', compact('product'));
    }
}
