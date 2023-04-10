<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($username)
    {
        $users = Users::where('username', $username)->first();
        return view('customer.show', ['user'=>$users]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($username)
    {
        $route = "/profile/update/$username";
        $users = Users::where('username', $username)->first();
        $flag = "modify";
        return view('customer.edit', ['route'=>$route, 'flag'=>$flag, 'user'=>$users]);
    }

    public function update(Request $request, $username)
    {
        $user = Users::where('username', $username)->first();
        $user->username = $request->get('username');
        $user->fullname = $request->get('fullname');
        $user->email = $request->get('email');
        $user->phone = $request->get('phone');
        $user->address = $request->get('address');
        $user>save();

        return redirect('/profile');
    }

    public function destroy($id)
    {
        //
    }
}
