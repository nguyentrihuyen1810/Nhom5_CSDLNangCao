<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function register(Request $request)
    {
        $users = new Users;
        $data = Users::where('email', $request->get('exampleInputEmail'));
        $count = $data->count();
        if ($count > 0) {
            return redirect('/register')->with('alert', 'The email is already used!');;
        } else {
            $id = Users::orderby('_id', 'desc')->first();
            $users->_id = $id->_id + 1;
            $users->fullname = $request->get('exampleInputFullname');
            $users->username = $request->get('exampleInputUsername');
            $users->password = $request->get('exampleInputPassword');
            $users->adress = $request->get('exampleInputAdress');
            $users->phone = $request->get('exampleInputPhone');
            $users->email = $request->get('exampleInputEmail');
            $users->role = '';

            $users->save();
            return redirect('/shop');
        }
    }
}
