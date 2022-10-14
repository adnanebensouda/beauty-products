<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function get_one($slug)
    {
        $product = Products::query()->where('slug', $slug)
            ->select('id', 'price', 'description' , 'img' , 'name')
            ->first();
        return view('product-details' , compact('product'));
    }

    public function checkout(Request $request){
        $product = Products::query()->where('id' , $request->id)
            ->select('id' , 'price' , 'name')->first();


        return view('checkout');
    }

    public function contact(){
            return view('contact');
    }

}
