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

    public function create(Request $request)
    {
        $id = product::orderby('id', 'desc')->first();
        $products = new Product([
            'id' => $id->id + 1,
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'image' => $request->input('image'),
            'description' => $request->input('description'),
            'quantity' => $request->input('quantity')
        ]);

        $categoryName = $request->input('category_name');
        $category = Category::firstOrCreate(['name' => $categoryName]);

        $products->category_id = [
            '_id' => $category->_id,
            'name' => $category->name
        ];

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . 'Controllers' . $image->getClientOriginalExtension();
            $image->move(public_path('image/product'), $imageName);
            $products->image = '/image/product/' . $imageName;
        }
        $products->save();
        return redirect('/admin');
    }


    public function show($name)
    {
//        $products = Product::findOrFail();
//        $products = Product::find('_id', (int)$id);
        $products = Product::where('name', $name)->first();
        return view ('product.show', ['product'=>$products]);
//        return view('product.show', compact('products'));
    }

    public function edit($id)
    {
        $route = "/admin/update/$id";
        $product = Product::where('_id',(int)$id)->first();
        $flag = "modify";
        return view('admin.edit', ['route'=>$route, 'flag'=>$flag, 'product'=>$product]);
    }

    public function update(Request $request, $id)
    {
        $product = Product::where('_id',(int) $id)->first();
        $product->name = $request->get('name');
        $product->image = $request->get('image');
        $product->price = $request->get('price');
        $product->quantity = $request->get('quantity');
        $product->description = $request->get('description');
        $product->save();

        return redirect('/admin');
    }

    public function delete($id)
    {
        Product::where('_id',(int)$id)->delete();
        return redirect('/admin');
    }

    public function search(Request $request){

        $keywords= $request->get('search');
        $keywords = trim(strip_tags($keywords));
        $all_product = Product::all();
        $listsp=[];
        if ($keywords!=""){
            $listsp = Product::where("name", "like", "%$keywords%")->get();
        }
        return view('/search')->with('search_product', $keywords )->with( 'listsp', $listsp);
    }
}
