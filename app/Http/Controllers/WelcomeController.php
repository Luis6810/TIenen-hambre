<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){

        $randomElement = Product::where('id',rand(0,25))->first();
        return view('welcome',compact('randomElement'));

        
    }
}
