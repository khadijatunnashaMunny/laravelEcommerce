<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;
use App\Http\Controllers\userController;

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

Route::get('/', function () {
    return view('master');
});
Route::get('/sign_up', function () {
    return view('signUp');
});
Route::post('signUp', [userController::class, 'signUp']);
Route::get('/sign_in', function () {
    return view('signIn');
});
Route::post("/signIn", [UserController::class, 'signIn']);
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('sign_in');
});

Route::get('/add-product', function () {
    return view('product/add_product');
});
Route::post('admin/product', [productController::class, 'product']);
Route::get('/get_product', [productController::class, 'get_product']);
Route::get("/detail/{id}", [ProductController::class, 'detail']);
Route::post('/add_to_cart', [productController::class, 'add_to_cart']);
Route::get("cartlist", [ProductController::class, 'cartList']);
Route::get("removecart/{id}", [ProductController::class, 'removeCart']);

Route::get("/search", [ProductController::class, 'search']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
