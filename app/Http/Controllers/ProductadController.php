<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\products;
use Illuminate\Http\Request;

class ProductadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    public function indexad()
    {
        $product = products::all();
        return view('product.indexad', compact('product'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addproduct(Request $request)
    {
       
        $id = products::orderby('_id', 'desc')->first();
        // $idsp = Products::latest()->first();
        $product = new Products([
            'id' => $id->id + 1, // Tăng giá trị ID lên một đơn vị
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'image' => $request->input('image'),
            'description' => $request->input('description'),
            'quantity' => $request->input('quantity')
        ]);

        $categoryName = $request->input('category_name');
        $category = Category::firstOrCreate(['name' => $categoryName]);

        // Lưu id và tên loại sản phẩm vào sản phẩm
        

        $product->category_id = [
            '_id' => $category->_id,
            'name' => $category->name
        ];

        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image/product'), $imageName);
            $product->image = '/image/product/' . $imageName;
        }
        // Lưu sản phẩm vào cơ sở dữ liệu
        $product->save();
        // return redirect()->back()->with('success', 'Thêm sản phẩm thành công.');
        return redirect('shopad');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function showad(products $product)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(products $product)
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
    public function update(Request $request, products $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(products $product)
    {
        //
    }
}