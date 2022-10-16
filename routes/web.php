<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\homeController;
use \App\Http\Controllers\ProductsController;
use App\Http\Controllers\ReservationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [homeController::class , 'index']);
Route::get('/products/{slug}' , [ProductsController::class , 'get_one']);
Route::post('/checkout' , [ProductsController::class, 'checkout']);
Route::post('/reservation_one' , [ReservationController::class , 'save_one']);
Route::post('/add-to-cart' , [ReservationController::class , 'add_to_cart']);
Route::get('/delete_item/{id}' , [ReservationController::class , 'delete_item']);
Route::get('/delete_item/checkout/{id}' , [ReservationController::class , 'delete_item']);
Route::get('/checkout_multiple' , [ReservationController::class , 'checkout_multiple']);
Route::get('/category/{id}' , [ProductsController::class , 'filter_by_category']);


Route::get('/contact' , [ProductsController::class , 'contact']);
Route::get('/shop' , [ProductsController::class , 'shop']);
Route::get('/about' , [ProductsController::class , 'about']);

Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard' , [ProductsController::class , 'dashboard']);
Route::post('/mylogin' , [ProductsController::class , 'admin']);
Route::get('/mylogin/stats' , [ProductsController::class , 'stats']);
