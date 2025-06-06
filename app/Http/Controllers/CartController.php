<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    public function index()
{
    $cartItems = Cart::with('product')
        ->where('user_id', Auth::id())
        ->get();

    $totalUnits = $cartItems->sum('units');

    $totalPrice = $cartItems->sum(function ($item) {
        return $item->units * $item->product->price;
    });

    return view('cart.index', [
        'cartItems' => $cartItems,
        'totalUnits' => $totalUnits,
        'totalPrice' => $totalPrice
    ]);
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

public function store(Request $request)
{
    $product = Product::where('slug', $request->input('product_slug'))->firstOrFail();
    $quantity = (int) $request->input('quantity', 1); // pega quantidade do input, padrão 1

    $cart = Cart::where([
        'user_id' => Auth::user()->id,
        'product_id' => $product->id
    ])->first();

    if (!$cart) {
        Cart::create([
            'user_id' => Auth::user()->id,
            'product_id' => $product->id,
            'units' => $quantity,   // usa a quantidade que veio do formulário
            'cep' => "00000-000"
        ]);
    } else {
        $cart->update([
            'units' => $cart->units + $quantity  // soma a quantidade enviada
        ]);
    }

    return redirect('/cart');
}



}
