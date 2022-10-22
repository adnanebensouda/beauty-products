<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;


class ProductsController extends Controller
{

    public function get_one($slug)
    {
        $product = Products::query()->where('slug', $slug)
            ->select('id', 'price', 'description', 'img', 'name', 'view_count')
            ->firstOrFail();


        Products::query()->where('id', $product->id)
            ->update(['view_count' => $product->view_count + 1]);

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

    protected function stats()
    {
        $products = Products::query()->select('id', 'name', 'img', 'price', 'view_count')
            ->orderBy('view_count', 'desc')
            ->get();
        return view('stats', compact('products'));
    }

    protected function admin_two()
    {
        if (AUth::user()) {
            $reservations = Reservation::query()->select("id", "product_id", "qte", "price_total", "client", "tel", "adress", "created_at")
                ->with('product:id,img,price,name')
                ->latest()
                ->get();
            return view('dashboard', compact('reservations'));
        } else {
            return view('welcome');
        }
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
                    ->latest()
                    ->get();
                return view('dashboard', compact('reservations'));
            } else {
                session()->put('user_found', 'Wrong Credentials');
                return redirect()->back();
            }
        }
        session()->put('user_found', 'Wrong Credentials');
        return redirect()->back();
    }


    protected function add_item(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|integer',
            'category' => 'required|integer',
            'textarea' => 'required|nullable'
        ]);

        Category::query()->findOrFail($request->category);

        $file = $request->file()['img'];
        $file_extension = $file->getClientOriginalExtension();
        $new_file_name = '' . time() . '.' . $file_extension;
        $file->move(public_path('/uploads'), $new_file_name);

        Products::query()->create([
            'name' => $request->name,
            'price' => $request->price,
            'slug' => Str::slug($request->name) . '-' . strval(rand(1000, 1000000)),
            'img' => '/uploads/' . $new_file_name,
            'description' => $request->textarea,
            'category_id' => $request->category,
        ]);

        Session::flash('message', "Product has been created");
        return back();
    }

    public function add()
    {
        if (Auth::user()) {
            $categories = Category::query()->select('id', 'name')
                ->get();
            return view('add_product', compact('categories'));
        } else {
            return redirect('/');
        }
    }

    public function delete_reservation($id)
    {
        if (Auth::user()) {
            Reservation::query()->findOrFail($id)
                ->deleteOrFail();
            return redirect('/mylogin');
        } else {
            return redirect('/');
        }
    }

    protected function delete_product($id)
    {
        $product = Products::query()->findOrFail($id);
        Reservation::query()->where('product_id', $id)->delete();
        $product->delete();
        return redirect('/mylogin/stats');
    }

}
