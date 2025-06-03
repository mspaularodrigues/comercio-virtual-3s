<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(){
        return view('cart.index', ['cartItems' => Cart::where(['user_id' => Auth::user()->id])->get()]);
    }

    public function update(Request $request, Cart $cart){
        $cart->update([
            'units' => $request->units
        ]);
        return redirect('/cart');
    }


    public function destroy(Cart $cart){
        $cart->delete();
        return redirect('/cart');
    }

    public function store(Product $product){
        $cart = Cart::where(['user_id' => Auth::user()->id, 'product_id' => $product->id])->first();
        if(!$cart){
            Cart::create([
                'user_id' => Auth::user()->id, 
                'product_id' => $product->id,
                'units' => 1,
                'cep' => "00000-000"
            ]);
        }else{
            $cart->update([
                'units' => $cart->units+1
            ]);
        }
        return redirect('/cart');
    }

}
