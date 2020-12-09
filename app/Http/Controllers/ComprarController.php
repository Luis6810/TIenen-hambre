<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ComprarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index($id){
        $product = Product::where('id',$id)->first();
        return view('comprar', compact('product'));
    }

    public function buy(Request $request){
        Product::where('id',$request->id)->decrement('stock');
        return redirect()->back()->with('success', 'La compra se ha realizado exitosamente, gracias por su preferencia');   
    }
}
