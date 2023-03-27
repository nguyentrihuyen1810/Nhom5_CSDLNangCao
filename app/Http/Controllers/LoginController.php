<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use App\Models\Login;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function create()
    {
        return view('/login');
    }

    public function checkLogin(Request $request)
    {
        
        $email = $request->input('exampleInputEmail');
        $password = $request->input('exampleInputPassword');
        $customer = Customers::where('email', $email)->where('password', $password)->first();if ($customer) {
        if ($customer->role === "") {
            return redirect('/home');
        } else if ($customer->role === "admin") {
            return redirect('/admin');
        }
        }  else {
            return redirect('/login')->with('error', 'Thông tin đăng nhập không chính xác');
        }
    
    }
    
}