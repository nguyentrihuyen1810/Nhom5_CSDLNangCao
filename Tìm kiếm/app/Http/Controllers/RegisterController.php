<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;

class RegisterController extends Controller
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

    public function create()
    {
        return view('/Register');
        //
    }

    public function addregister(Request $request)
    {
        $users = new Customers;
        $id = Customers::orderby('_id', 'desc')->first();
        $users->_id = $id->_id + 1;
        $users->fullname = $request->get('exampleInputFullname'); 
        $users->username = $request->get('exampleInputUsername'); 
        $users->password = $request->get('exampleInputPassword');
        $users->adress = $request->get('exampleInputAdress');
        $users->phone = $request->get('exampleInputPhone');
        $users->email = $request->get('exampleInputEmail');
        $users->role = '';
    
        $users->save();
        return redirect('/home');
        // return redirect('/customers');

        //
    }
}
