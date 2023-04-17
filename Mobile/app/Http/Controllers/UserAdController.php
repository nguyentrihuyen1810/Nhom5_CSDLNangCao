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

    public function showuser($id)
    {
        $customers = Customers::where('_id', (int)$id)->first();
        return view ('showuser', ['customers'=>$customers]);
    }
    

    public function delete($id)
    {
        Customers::where('_id', (int)$id)->delete();

        return redirect('/userad');
    }
    
}
