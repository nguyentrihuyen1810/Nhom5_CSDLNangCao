<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use MongoDB\BSON\ObjectId;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $customer_id = session('user')->id;
        $cart = Cart::all();
        $list= Cart::where('customer_id', $customer_id)->get();

        return view('cart.index', compact('cart'))->with('i', (request()->input('page', 1) - 1) * 5)->with('list',$list);
    }

    public function addcart(Request $request)
    {
        $productId = $request->get('productId');
        $quantity = (int)$request->get('quantity');

        $customer_id = session('user')->id;

        $product = Product::where('_id', "$productId")->first();


        $cartItem = Cart::where('customer_id', $customer_id)
            ->where('product_id', $productId)
            ->first();

        if ($cartItem) {
            $cartItem->quantity += $quantity;
            $cartItem->total = $product->price * $cartItem->quantity;
            $cartItem->save();
        } else {
            $cartItem = new Cart();

            $cartItem->customer_id = $customer_id;
            $cartItem->product_id = $productId;
            $cartItem->quantity = $quantity;
            $cartItem->total = $product->price * $quantity;
            $cartItem->save();
        }

        return redirect('/cart');
    }

    public function edit($id)
    {
        $customer_id = session('user')->id;
        $idud = Cart::where('_id',(string)$id)->first();
        $cart = Cart::where('customer_id', "$customer_id")->get();;
        return view('cart.edit', compact('cart'))->with('i', (request()->input('page', 1) - 1) * 5)->with('idud',$idud);
    }

    public function update(Request $request, $id)
    {
        $idud = Cart::where('_id',(string)$id)->first();
        $idud->quantity=(int)$request->get('quantityud');
        $idud->save();
        $cart = Cart::all();
        return redirect('/cart');
    }

    public function delete($id)
    {
        Cart::where('_id',(string)$id)->delete();
        return redirect('/cart');
    }

    public function checkout(Request $request)
    {
        $customer_id = session('user')->id;
        $cart = Cart::all();
        $list= Cart::where('customer_id', $customer_id)->get();
        
        //cập nhật order
        $subtotal=0;
        $code = Order::orderby('code', 'desc')->first()->code+1;
        foreach ($list as $cart) {
            $subtotal+=$cart->total;
        }
        $order = new Order([
            'code' => $code,
            'customer_id' => $customer_id,
            'subtotal' => $subtotal
        ]);
        $order->save();


        //cập nhật orderDetail
        $order_id= Order::orderby('code', 'desc')->first()->id;
        foreach ($list as $cart) {
            $code = OrderDetail::orderby('code', 'desc')->first()->code+1;
            $productId = $cart->product->id;
            $quantity = $cart['quantity'];
            $total = $quantity * $cart->product->price;
            $proid= new ObjectId($productId);

            $orderdetail = new OrderDetail([
                'code' => $code,
                'customer_id' => $customer_id,
                'product_id' => $proid,
                'quantity' => $quantity,
                'total' => $total,
                'order_id' => $order_id
            ]);

	    //xoá stock
	    $product = Product::where('_id',$productId)->first();
	    if($product->quantity>=$quantity){
	    $product->quantity = $product->quantity - $quantity;
	    }else{
	    	$cart['quantity']=$product->quantity;
            $cart->save ();
		return redirect('/cart')->with('alert', 'Not enough products in stock!');
	    }
	    $product->save();
            $orderdetail->save(); 
            
        }
 
        //xoá giỏ hàng
        Cart::where('customer_id', $customer_id)->delete();

        return redirect('/')->with('alert', 'Successfull order');
    }
}