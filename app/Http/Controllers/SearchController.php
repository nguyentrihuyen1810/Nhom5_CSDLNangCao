<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use App\Http\Controllers\Search;

class SearchController extends Controller
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

    // public function checksearch()
    // {
    //     return view('/search');       
    //     //
    // }

    // public function addRegister(Request $request)
    // {
    //     $users = new Customers;
    //     $id = Customers::orderby('_id', 'desc')->first();
    //     $users->_id = $id->_id + 1;
    //     $users->fullname = $request->get('exampleInputFullname'); 
    //     $users->username = $request->get('exampleInputUsername'); 
    //     $users->password = $request->get('exampleInputPassword');
    //     $users->adress = $request->get('exampleInputAdress');
    //     $users->phone = $request->get('exampleInputPhone');
    //     $users->email = $request->get('exampleInputEmail');
    //     $users->role = '';
    
    //     $users->save();
    //     return redirect('/home');
    //     // return redirect('/customers');

    //     //
    // }
    public function search(Request $request){
        // $keywords = $request->get('search');
        
        // $search_product = Products::where('name','like','%'.$keywords.'%')->get();

        // return view('/search')->with('search_product',$search_product);

        $keywords= $request->get('search');
        $keywords = trim(strip_tags($keywords));
        $all_product = Products::all();
        $listsp=[];
        if ($keywords!=""){
        $listsp = Products::where("name", "like", "%$keywords%")->get();
  }
    return view('/search')->with('search_product', $keywords )->with( 'listsp', $listsp);
}
}