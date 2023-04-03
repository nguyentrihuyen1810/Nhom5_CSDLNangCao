<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //login
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


    //register
    public function addRegister(Request $request)
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
