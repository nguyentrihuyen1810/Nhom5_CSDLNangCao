<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\orderDetail;
use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductadController extends Controller
{
  

    public function indexad()
    {
        $product = products::all();
        return view('product.indexad', compact('product'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // public function Revenue()
    // {
    //     $product = products::all();
    //     return view('Revenue', compact('product'))->with('i', (request()->input('page', 1) - 1) * 5);
    // }


    public function Revenue()
    {
        $results = OrderDetail::groupBy('product.id', 'product.name','product.image')
                        ->select('product.id', 'product.name','product.image', DB::raw('SUM(quantity) as total_quantity'), DB::raw('SUM(total) as total_sales'))
                        ->get();
        return view('Revenue', compact('results'));
        
    }
    // public function Revenue()
    // {
    //     $results = OrderDetail::getTotalSalesByProduct();
    //     return view('Revenue', compact('results'));
    // }


    /**
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
   

    public function showad($name)
    {
        $products = products::where('name', $name)->first();
        return view ('showad', ['product'=>$products]);
    }

    public function edit($name)
    {
//        return view('edit',compact('product'));
        $route = "/list/update/$name";
        $product = products::where('name', $name)->first();
        $flag = "modify";
        return view ('edit', ['router'=>$route, 'flag'=>$flag, 'product'=>$product]);
    }
    public function update(Request $request, $name)
    {
        $product = Products::where('name', $name)->first();
        $product->name = $request->get('name');
        $product->price = $request->get('price');
        $product->quantity = $request->get('quantity');
        $product->description = $request->get('description');
        $product->save();

        return redirect('/shopad');
    }

    public function delete($prdname)
    {
        products::where('name',$prdname)->delete();

        return redirect('/shopad');
    }
    
}