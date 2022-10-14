<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function get_one($slug)
    {
        $product = Products::query()->where('slug', $slug)
            ->select('id', 'price', 'description', 'img', 'name')
            ->firstOrFail();

//        $cart = session()->get('cart', []);
//        $cart[$product->id] = ["name" => $product->name , "qte" =>7];
//        session()->put('cart' , $cart);
//        $cart = session()->get('cart', []);


        return view('product-details', compact('product'));
    }

    public function checkout(Request $request)
    {
        $product = Products::query()->where('id', $request->id)
            ->select('id', 'price', 'name', 'description')->first();
        $results = (object)array(
            'name' => $product->name,
            'total_price' => $product->price * $request->qte,
            'price' => $product->price,
            'qte' => $request->qte,
            'description' => $product->description,
            'id' => $product->id
        );

        return view('contact', compact('results'));
    }

    public function contact()
    {
        return view('contact');
<<<<<<< HEAD
}
public function shop(){
    return view('shop');
}
public function about(){
    return view('about');
}
=======
    }

>>>>>>> 2425dbca86c6eb25ab3b8a4d3bda85a0f8d88f3c
}
