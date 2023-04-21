<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Products::all();
        return view('product.index', compact('product'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function indexus()
    {
        $product = Products::all();
        return view('product.indexus', compact('product'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // categoryList
    public function indexSamsung() {
        $product = Products::where("name", "like", "%Samsung%")->get();
        return view('category.samsung', compact('product'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function indexOppo() {
        $product = Products::where("name", "like", "%Oppo%")->get();
        return view('category.oppo', compact('product'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function indexIphone() {
        $product = Products::where("name", "like", "%Iphone%")->get();
        return view('category.iphone', compact('product'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function indexXiaomi() {
        $product = Products::where("name", "like", "%Xiaomi%")->get();
        return view('category.xiaomi', compact('product'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function indexVivo() {
        $product = Products::where("name", "like", "%Vivo%")->get();
        return view('category.vivo', compact('product'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function indexTablet() {
        $product = Products::where("name", "like", "%Tablet%")->get();
        return view('category.tablet', compact('product'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function indexCase() {
        $product = Products::where("name", "like", "%Case%")->get();
        return view('category.case', compact('product'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function indexSmartwatch() {
        $product = Products::where("name", "like", "%Smart%")->get();
        return view('category.smartwatch', compact('product'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function indexSoftware() {
        $product = Products::where("name", "like", "%Microsoft%")->get();
        return view('category.software', compact('product'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function indexHeadphone() {
        $product = Products::where("name", "like", "%Bluetooth%")->get();
        return view('category.headphone', compact('product'))->with('i', (request()->input('page', 1) - 1) * 5);
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
    public function show($name)
    {
        $products = products::where('name', $name)->first();
        return view ('show', ['product'=>$products]);
    }
    public function showus($name)
    {
        $products = products::where('name', $name)->first();
        return view ('showus', ['product'=>$products]);
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
