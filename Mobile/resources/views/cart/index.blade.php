<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="image/logo.png"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
    <title>Cart</title>
</head>
<body>
@include('headerUser')

<div style="padding: 20px; width: 100%; border: 1px solid #777777">
    <a style="margin: 10px 0px; color: #777777">CART</a><br>
    <a>Home / </a><a style="color:#43A316">Cart</a>
</div>

<h3 style="text-align: center; margin-top: 100px"><b>CART</b></h3>
<div style = "width: 900px; margin-top: 50px; height: auto; margin-left: 100px; float: left">
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col"></th>
            <th style="color: #454545">Product</th>
            <th style="color: #454545">Price</th>
            <th style="color: #454545; text-align:center">Quantity</th>
            <th style="color: #454545">Subtotal</th>
        </tr>
        </thead>
        <tbody>
        {{$total=0}}
        @foreach ($cart as $cart)
        <tr>
            <td><a style="text-decoration:none; color:black; padding-top: 60px; text-align: center" href="/deleteCart/{{$cart->id}}" onclick="return confirm('confirm delete?')"><h4 style=" padding-top: 60px;">X</h4></a></td>
            <td><img style="width: 170px; height: 150px;" src="<?php echo asset("image/product/{$cart->product->image}")?>"></td>
            <td><h6 style="margin-top: 60px;">{{$cart->product->name}}</h6></td>
            <td><h6 style="margin-top: 60px">${{$cart->product->price}}</h6></td>
            <td><h6 style="margin-top: 60px; margin-left: 20px"><a style="text-decoration:none;color:black" href="/suCart/{{$cart->id}}">&#9998;</a>&emsp;{{$cart->quantity}}</h6></td>
            <td><h6 style="margin-top: 60px; margin-left: 8px">${{$cart->product->price*$cart->quantity}}</h6></td>
            {{$total+=($cart->product->price*$cart->quantity)}}
        </tr>
        @endforeach
        </tbody>
    </table>
</div>

<div class="card" style="width: 18rem; margin-left: 100px; float: left; margin-top: 50px; width: 280px; height: auto">
    <div class="card-body">
        <h5 class="card-title">CART TOTALS</h5><br>
        <p class="card-text">Total &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;${{$total}}</p>
        <button type="submit" class="btn btn-success" style="border: none; background-color: #43A316; width: 250px; margin-left: 0px; float: left; margin-top: 25px">Checkout</button>
    </div>
</div>

@include('followUS')

@include('footer')

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>