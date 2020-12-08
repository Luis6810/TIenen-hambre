<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\DB;

class EspecialesController extends Controller
{
    public function index(){
        //$products = Product::select('categories.name')->join('categories','products.category_id','categories.id')->where('categories.name','Especiales')->orderBy('products.id','DESC')->get();
        $products = Product::whereHas('category',function($query){
            $query->where('categories.name','Especiales');
        })->get();
        return view('especiales', compact('products'));
        
    }

}
