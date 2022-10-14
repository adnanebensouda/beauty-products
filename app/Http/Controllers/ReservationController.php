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
        return view('good');
    }
}










