<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\product;
use App\Models\cart;

use Session;

class productController extends Controller
{
    //
    public function product(Request $request)
    {

        $product['productId'] = $request->productId;
        $product['productName'] = $request->productName;
        $product['productPrice'] = $request->productPrice;

        $INS = DB::table('products')->insert($product);
        return Redirect()->back();
    }
    public function get_product()
    {
        $product = DB::table('products')->get();
        return view('product/show_product')->with('product', $product);
    }
    public  function detail($id)
    {
        $product = product::find($id);
        return view('product/detail')->with('product', $product);
    }
    public function add_to_cart(Request $request)
    {
        if ($request->session()->has('user')) {

            $cart = new cart;
            $cart->user_id = $request->session()->get('user')['id'];
            $cart->product_id = $request->product_id;
            $cart->save();
            return redirect('/');
        } else {
            return redirect('/sign_in');
        }
    }
    public function search(Request $request)
    {
        // $product = product::where('productName', 'like', '%' . $request->input('query') . '%')
        //     ->get();
        // return view('product/search', ['product' => $product]);
    }
}
