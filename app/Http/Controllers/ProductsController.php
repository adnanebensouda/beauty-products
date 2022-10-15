<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class ProductsController extends Controller
{

    public function get_one($slug)
    {
        $product = Products::query()->where('slug', $slug)
            ->select('id', 'price', 'description', 'img', 'name')
            ->firstOrFail();

        return view('product-details', compact('product'));
    }

    public function checkout(Request $request)
    {
        $product = Products::query()->where('id', $request->id)
            ->select('id', 'price', 'name', 'description')
            ->first();

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

    }

    public function shop()
    {
        return view('shop');
    }

    public function about()
    {
        return view('about');
    }

    public function filter_by_category($id)
    {
        $products = Products::query()->where('category_id', $id)
            ->select('id', 'name', 'price', 'slug', 'img', 'description')
            ->get();
        $category_name = Category::query()->select('id', 'name')
            ->findOrFail($id);
        return view('shop', compact('products', 'category_name'));

    }

    public function dashboard()
    {
        return view('dash');
    }

    protected function admin(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);


        $user = User::query()->where('email', $request->email)
            ->first();

        $credentials = $request->only('email', 'password');
        if ($user) {
            if (Auth::attempt($credentials)) {

                $reservations = Reservation::query()->select("id", "product_id", "qte", "price_total", "client", "tel", "adress", "created_at")
                    ->with('product:id,img,price,name')
                    ->orderBy('created_at')
                    ->get();
                return view('dashboard' , compact('reservations'));
            } else {
                session()->put('user_found', 'Wrong Credentials');
                return redirect()->back();
            }
        }
        session()->put('user_found', 'Wrong Credentials');
        return redirect()->back();
    }

}
