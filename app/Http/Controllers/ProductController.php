<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    public function list()
    {
        $products = Product::all();
        return view('admin.index', compact('products'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($name)
    {
        $products = Product::where('name', $name)->first();
        return view ('product.show', ['product'=>$products]);
    }

    public function edit($name)
    {
        $route = "/admin/update/$name";
        $products = Product::where('name', $name)->first();
        $flag = "modify";
        return view('admin.edit', ['route'=>$route, 'flag'=>$flag, 'product'=>$products]);
    }

    public function update(Request $request, $name)
    {
        $product = Product::where('name', $name)->first();
        $product->name = $request->get('name');
        $product->image = $request->get('image');
        $product->price = $request->get('price');
        $product->quantity = $request->get('quantity');
        $product->description = $request->get('description');
        $product>save();

        return redirect('/admin');
    }

    public function delete($name)
    {
        Product::where('name',$name)->delete();
        return redirect('/admin');
    }
}
