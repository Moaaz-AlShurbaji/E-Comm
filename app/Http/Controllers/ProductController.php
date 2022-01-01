<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use Session;
class ProductController extends Controller
{
    public function index()
    {
        $products = Product::get();
        return view('product.products',compact("products")); 
    }

    public function details($product_id)
    {
        $product_details = Product::FindorFail($product_id);
        return view('product.details',\compact('product_details'));
    }

    public function search(Request $request)
    {
       // return $request->input();
       $results = Product::where('name','like','%'.$request->search.'%')->get();
       return view('product.search',compact('results'));
    }

    public function addToCart(Request $request)
    {
        if($request->session()->has('user'))
        {
            $user = session()->get('user');
            Cart::create([
                "product_id" => $request->product_id,
                "user_id" => $user->id,
            ]);
            return redirect()->back()->with('success','Item added to cart successfully');
        }
        else
        {
            return redirect('login');
        }
        
    }

    public static function cartItem()
    {
        $user = Session::get('user');
        $userId = $user->id;
        $items = Cart::where('user_id',$userId)->count();
        return $items;
    }
}
