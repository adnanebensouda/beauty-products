<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function save_one(Request $request)
    {
        Reservation::create([
            "product_id" => $request->product_id,
            "qte" => $request->qte,
            "price_total" => $request->total_price,
            "client" => $request->first_name . " " . $request->last_name,
            "tel" => $request->phone,
            "adress" => $request->address
        ]);
        $cart = session()->get('cart', []);
        if (isset($cart[$request->product_id])) {
            unset($cart[$request->product_id]);
            session()->put('cart', $cart);
        }
        return view('good');
    }

    public function add_to_cart(Request $request)
    {
        $cart = session()->get('cart', []);
        $cart[$request->id] = ["name" => $request->name,
            "qte" => $request->qte,
            "img" => $request->img,
            "price" => $request->price
        ];
        session()->put('cart', $cart);
        $cart = session()->get('cart', []);
        return redirect()->back();
    }

    protected function delete_item($id)
    {
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }
        return redirect()->back();
    }

    public function checkout_multiple()
    {
        return view('checkout');
    }

}










