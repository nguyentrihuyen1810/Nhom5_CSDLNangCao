<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use App\Models\Logout;
use Illuminate\Http\Request;
use Auth;

class LogoutController extends Controller
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

    public function create ()
    {
        return view('/logout');
    }

    public function checklogout(){
        Auth::logout();
       
        return redirect('/home');
    }


    }

   
    
