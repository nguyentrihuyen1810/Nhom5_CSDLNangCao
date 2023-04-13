<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Users;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index()
    {
        $users = Users::all();
        return view('admin.listUser', compact('users'));
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        $users = Users::where('_id',(int)$id)->first();
        return view('customer.show', ['user'=>$users]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $route = "/profile/update/$id";
        $user = Users::where('_id', (int)$id)->first();
        $flag = "modify";
        return view('customer.edit', ['route'=>$route, 'flag'=>$flag, 'user'=>$user]);
    }

    public function update(Request $request, $id)
    {
        $user = Users::where('_id', (int)$id)->first();
        $user->username = $request->get('username');
        $user->fullname = $request->get('fullname');
        $user->email = $request->get('email');
        $user->phone = $request->get('phone');
        $user->address = $request->get('address');
        $user->save();

        return view('customer.show', ['user'=>$user]);
    }

    public function destroy($id)
    {
        Users::where('_id',(int)$id)->delete();
        return redirect('/listUser');
    }
}
