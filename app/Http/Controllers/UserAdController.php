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

    public function delete($id) {
        $customer = Customers::find($id);
        if ($customer) {
            $customer->delete();
        } 
        return redirect()->back();
    }
    

    public function destroy($id)
    {
        $customer = Customers::find($id);
    
        if(!$customer){
            return redirect()->back()->with('error', 'Không tìm thấy khách hàng!');
        }
    
        $customer->delete();
    
        return redirect()->back()->with('success', 'Đã xóa khách hàng thành công!');
    }
    

}
