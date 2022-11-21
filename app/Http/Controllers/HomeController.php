<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\User;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::all();
        return view('frontend.home', compact('products'));
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('frontend.productview', compact('product'));
    }

    public function cart()
    {
        
        return view('frontend.cart');
    }

    public function addToCart(Request $request, $id)
    {
        
        if(Auth::check()){
            $user = Auth::user()->id;
            $product = Product::findOrFail($id);

            
            $cart = session()->get('cart'.$user,[]);
            if(isset($cart[$id])){
                $cart[$id]['quantity']++;
            }
            else{
                $cart[$id] = [
                    "name" => $product->name,
                    "quantity" => 1,
                    "price" => $product->price,
                    "image" => $product->image
                ];
            }

            session()->put('cart'.$user, $cart);
        //dd(session()->get('cart'));
            return redirect()->back()->with('success', 'Product added to cart successfully');
        }
        
    }

    public function update(Request $request)
    {
        if(Auth::check()){
            $user = Auth::user()->id;
           if($request->id && $request->quantity){
            $cart = session()->get('cart'.$user);
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart'.$user, $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }
    }

    public function remove(Request $request)
    {
        if(Auth::check()){
            $user = Auth::user()->id;
        if($request->id) {
            $cart = session()->get('cart'.$user);
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart'.$user, $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }
    }

    public function order($id)
    {
        if(Auth::check()){
            $user = Auth::user()->id;
           
            $product = Product::findOrFail($id);

            $cart = session()->get('cart'.$user,[]);

            if(isset($cart[$id])){
                $cart[$id]['quantity']++;
            }
            else{
                $cart[$id] = [
                    "name" => $product->name,
                    "quantity" => 1,
                    "price" => $product->price,
                    "image" => $product->image
                ];
            }

            session()->put('cart'.$user, $cart);
        //dd(session()->get('cart'));
        
        }   
        return redirect('/products/cart');
    }

    public function orderList()
    {
        return view('frontend.Order');
    }

    public function storeOrder()
    {
        
        if(Auth::check()){
            $user = Auth::user()->id;
            $cart = session()->get('cart'.$user,[]);

            foreach($cart as $id=>$details){
                $order = new Order;
                $order->user_id = Auth::user()->id;
                $order->product_id = $id;
                $order->quantity = $details['quantity'];
                $order->price = $details['price'] * $details['quantity'];

                $order->save();
                
                
            }
            
            session()->forget('cart'.$user);
            return redirect()->back()->with('message', "order added");
        }
    }

}
