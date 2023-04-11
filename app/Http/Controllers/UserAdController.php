<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;

class UserAdController extends Controller
{
    public function users()
    {
        $customers = Customers::all();
        return view('users', compact('customers'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

}
