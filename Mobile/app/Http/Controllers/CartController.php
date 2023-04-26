<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart = Cart::all();
        return view('cart.index', compact('cart'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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



    public function deleteCart($id)
    {
        Cart::where('_id',(string)$id)->delete();
        $cart = Cart::all();
        return view('cart.index', compact('cart'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    

    public function suCart($id)
    {
        $idud=Cart::where('_id',(string)$id)->first();
        $cart = Cart::all();
        return view('cart.suCart', compact('cart'))->with('i', (request()->input('page', 1) - 1) * 5)->with('idud',$idud);
    }

    public function udCart(Request $request,$id)
    {
        $idud=Cart::where('_id',(string)$id)->first();
        $idud->quantity=(int)$request->get('quantityud');
        $idud->save();
        $cart = Cart::all();
        return view('cart.index', compact('cart'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
