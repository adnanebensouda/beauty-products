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

Route::get('/contact' , [ProductsController::class , 'contact']);


Route::post('/reservation_one' , [ReservationController::class , 'save_one']);
