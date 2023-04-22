<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Products;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {

        // $customer_id = Auth::id();
        // $cartItems = Cart::where('customer_id', $customer_id)
        //                 ->with('product')
        //                 ->get();
        
        // $total = 0;
        // foreach ($cartItems as $item) {
        //     $total += $item->total;
        // }
        
        // return view('cart', [
        //     'cartItems' => $cartItems,
        //     'total' => $total
        // ]);
        $cart = Cart::all();
        return view('cart.index', compact('cart'))->with('i', (request()->input('page', 1) - 1) * 5);
        
    }


    public function addcart(Request $request){

        $productId = $request->get('productId');
        $quantity = (int)$request->get('quantity');
        // $customer_id = Auth::id();//SESSION
        $customer_id = $request->session()->get('id');
        
        $product = Products::where('_id', "$productId")->first();
        
        
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

 





    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $product)
    {
        //
    }
}
