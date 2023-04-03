@extends('layout')

@include('headerAdmin')

@section('content')
<section>
    <div class="addsp">
        <ul class=addsp1>
            <li><a href="/adcreate">
                    <button style="margin-top: 150px" class="btn btn-success" class="add">Create New Product</button>
                </a>
            </li>
            <br>
        </ul>
    </div>
    <div class="thongbao">
        <p>Product update successfully</p>
    </div>
    <h3 style="margin-top: 40px; text-align: center">PRODUCT MANAGEMENT</h3>
    <div class="product" style="margin-top: 50px">
    @if (Session::has('thongbao'))
        <div class="alert alert-success">
            {{Session::get('thongbao')}}
        </div>
    @endif
        <table>
            <tr>
                <td>No</td>
                <td>Image</td>
                <td>Name</td>
                <td>Details</td>
                <td>Action</td>
            </tr>
            @foreach ($products as $products)
                <tr>
                    <td>{{$products->id}}</td>
                    <td><img src="<?php echo asset("image/product/{$product->image}")?>" width=150px height="150px">
                    </td>
                    <td>{{ $products->name }}</td>
                    <td>{{$products->description}}</td>
                    <td>
                        <a href="/product/showad">
                            <button class="Show">Show</button>
                        </a>
                        <a href="">
                            <button class="Edit">Edit</button>
                        </a>
                        <a href="">
                            <button class="Delete">Delete</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</section>

@include('followUs')
@include('footer')

@endsection