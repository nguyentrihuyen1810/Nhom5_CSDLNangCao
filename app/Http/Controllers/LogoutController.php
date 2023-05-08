<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\Login;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function checklogout(Request $request){
        $request->session()->forget('user');

        return redirect('/login');
    }

}
