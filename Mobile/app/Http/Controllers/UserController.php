<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //login
    // public function checkLogin(Request $request)
    // {
        
    //     $email = $request->input('exampleInputEmail');
    //     $password = $request->input('exampleInputPassword');
    //     $customer = Customers::where('email', $email)->where('password', $password)->first();if ($customer) {
       

    //     if ($customer) {
    //         session(['customer' => $customer]); 
    //         if ($customer->role === "") {
    //             return redirect('/home');
    //         } else if ($customer->role === "admin") {
    //             return redirect('/admin');
    //         }
    //     } else {
    //         return redirect('/login')->with('error', 'Thông tin đăng nhập không chính xác');
    //     }
    
    // }
    public function checkLogin(Request $request)
    {
        $email = $request->input('exampleInputEmail');
        $password = $request->input('exampleInputPassword');
        $customer = Customers::where('email', $email)->where('password', $password)->first();
        if ($customer) {
            session(['customer' => $customer]); 
            if ($customer->role === "") {
                return redirect('/home');
            } else if ($customer->role === "admin") {
                return redirect('/admin');
            }
        } else {
            return redirect('/login')->with('error', 'Thông tin đăng nhập không chính xác');
        }
    }





    //register
    public function addRegister(Request $request)
    {
        $users = new Customers;
        $data = Customers::where('email',$request->get('exampleInputEmail'));
        $count = $data->count();
        if ($count>0){
            return redirect('/register')->with('alert', 'The email is already used!');;
        }else{
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
            return redirect('/login');
        }
    }

    
    public function checklogout(Request $request){
        $request->session()->forget('customer');
    
        return redirect('/login');
    }




    public function show($id)
    {
        $users = Customers::where('_id', (int)$id)->first();
        return view('user.information', ['user'=>$users]);
    }

    public function edit($id)
    {
        $route = "/profile/update/$id";
        $users = Customers::where('_id', (int)$id)->first();
        $flag = "modify";
        return view('user.edit', ['route'=>$route, 'flag'=>$flag, 'user'=>$users]);
    }
    public function update(Request $request, $id)
    {
        $user = Customers::where('username', $id)->first();
        $user->username = $request->get('username');
        $user->fullname = $request->get('fullname');
        $user->email = $request->get('email');
        $user->phone = $request->get('phone');
        $user->address = $request->get('address');
        $user->save();

        return redirect('/profile');
    }
}
