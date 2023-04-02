<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Controllers\ProductController;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function admin()
    {
        $all_product=Product::all();
        return view('/crudprd')->with('all_product', $all_product );
    }

    public function delete($prdname)
    {
        Product::where('name',$prdname)->delete();

        return redirect('/admin')->with('success','Sucessfull delete.');
    }
}
