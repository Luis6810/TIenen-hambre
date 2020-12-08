<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class BebidasController extends Controller
{
    public function index(){
        //$products = Product::select('categories.name')->join('categories','products.category_id','categories.id')->where('categories.name','Especiales')->orderBy('products.id','DESC')->get();
        $products = Product::whereHas('category',function($query){
            $query->where('categories.name','Bebidas');
        })->get();
        return view('bebidas', compact('products'));
        
    }
}
