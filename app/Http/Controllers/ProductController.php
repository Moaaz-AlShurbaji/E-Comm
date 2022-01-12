<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\Cart;
use App\Order;
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

    public function cartList()
    {
        if(!Session::has('user'))
        {
            return view('login');
        }
        else
        {
            $user = Session::get('user');
            $userId = $user->id;
            $products = DB::table('carts')
            ->join('products','carts.product_id','=','products.id')
            ->where('carts.user_id',$userId)
            ->select('products.*','carts.id as carts_id')
            ->get();
            return view('product.cart',compact('products'));
        }
    }
    public function removeCart($carts_id)
    {
        Cart::destroy($carts_id);
        return redirect('/cart-list');
    }

    public function orderNow()
    {
        $user = Session::get('user');
            $userId = $user->id;
            $total = $products = DB::table('carts')
            ->join('products','carts.product_id','=','products.id')
            ->where('carts.user_id',$userId)
            ->select('products.*','carts.id as carts_id')
            ->sum('products.price');

            return view('product.ordernow',compact('total'));    
    }

    public function orderPlace(Request $request)
    {
        $request->validate([
            "address" => "required",
            "payment" => "required"
        ]);
        $userId = Session::get('user')['id'];
        $carts = Cart::where('user_id',$userId)->get();
        foreach($carts as $cart)
        {
            Order::create([
                'product_id' => $cart->product_id,
                'user_id' => $cart->user_id,
                'status' => 'pending',
                'payment_method' => $request->payment,
                'payment_status' => 'pending',
                'address' => $request->address

            ]);
            Cart::destroy($cart->id);
        }
        return redirect('/');
    }

    public function orderList()
    {
        if(!Session::has('user'))
        {
            return redirect('/login');
        }
        else
        {
            $userId = Session::get('user')['id'];
            $orders = $products = DB::table('orders')
            ->join('products','orders.product_id','=','products.id')
            ->where('orders.user_id',$userId)
            ->get();
            return view('product.orders', compact('orders'));
        }
    }
}
