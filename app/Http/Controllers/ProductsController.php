<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function get_one($slug)
    {
        $product = Products::query()->where('slug' , $slug)->first();
        return view('product-details');

    }


}
