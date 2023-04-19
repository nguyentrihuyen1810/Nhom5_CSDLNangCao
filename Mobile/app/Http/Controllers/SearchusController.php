<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use App\Http\Controllers\Search;

class SearchusController extends Controller
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

    
    public function searchus(Request $request){
        // $keywords = $request->get('search');
        
        // $search_product = Products::where('name','like','%'.$keywords.'%')->get();

        // return view('/search')->with('search_product',$search_product);

        $keywords= $request->get('searchus');
        $keywords = trim(strip_tags($keywords));
        $all_product = Products::all();
        $listsp=[];
        if ($keywords!=""){
        $listsp = Products::where("name", "like", "%$keywords%")->get();
  }
    return view('/searchus')->with('search_product', $keywords )->with( 'listsp', $listsp);
}
}