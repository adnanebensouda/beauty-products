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
        return $request;
        return view('checkout');
    }

public function contact(){
        return view('contact');
}

}
