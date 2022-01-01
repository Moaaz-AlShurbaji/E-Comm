<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
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
}
