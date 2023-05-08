<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $customer_id = session('user')->id;
        $cart = Cart::all();
        $list= Cart::where('customer_id', $customer_id)->get();

        return view('cart.index', compact('cart'))->with('i', (request()->input('page', 1) - 1) * 5)->with('list',$list);
    }

    public function addcart(Request $request)
    {
        $productId = $request->get('productId');
        $quantity = (int)$request->get('quantity');

        $customer_id = session('user')->id;

        $product = Product::where('_id', "$productId")->first();


        $cartItem = Cart::where('customer_id', $customer_id)
            ->where('product_id', $productId)
            ->first();

        if ($cartItem) {
            $cartItem->quantity += $quantity;
            $cartItem->total = $product->price * $cartItem->quantity;
            $cartItem->save();
        } else {
            $cartItem = new Cart();

            $cartItem->customer_id = $customer_id;
            $cartItem->product_id = $productId;
            $cartItem->quantity = $quantity;
            $cartItem->total = $product->price * $quantity;
            $cartItem->save();
        }

        return redirect('/cart');
    }

    public function edit($id)
    {
        $customer_id = session('user')->id;
        $idud = Cart::where('_id',(string)$id)->first();
        $cart = Cart::where('customer_id', "$customer_id")->get();;
        return view('cart.edit', compact('cart'))->with('i', (request()->input('page', 1) - 1) * 5)->with('idud',$idud);
    }

    public function update(Request $request, $id)
    {
        $idud = Cart::where('_id',(string)$id)->first();
        $idud->quantity=(int)$request->get('quantityud');
        $idud->save();
        $cart = Cart::all();
        return redirect('/cart');
    }

    public function delete($id)
    {
        Cart::where('_id',(string)$id)->delete();
        $cart = Cart::all();
        return redirect('/cart');
    }
}
