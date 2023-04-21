@extends('layout')

@include('headerAdmin')

@section('content')
<section>
    <div class="addsp">
        <ul class=addsp1>
            <li><a href="/addcreate">
                    <button style="margin-top: 60px" class="btn btn-success" class="add">Create New Product</button>
                </a>
            </li>
            <br>
        </ul>
    </div>
    <div class="thongbao">
        @if (Session::has('thongbao'))
        <div class="alert alert-success">
            {{Session::get('thongbao')}}
        </div>
    @endif
        {{-- <p>Product update successfully</p> --}}
    </div>
    <h3 style="margin-top: 180px; text-align: center">PRODUCT MANAGEMENT</h3>
    <div class="product" style="margin-top: 50px">
   
        <table>
            <tr>
                <td>No</td>
                <td>Image</td>
                <td>Name</td>
                <td>Details</td>
                <td>Action</td>
            </tr>
            @foreach ($product as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td><img src="<?php echo asset("image/product/{$product->image}")?>" width=150px height="150px">
                    </td>
                    <td>{{ $product->name }}</td>
                    <td>{{$product->description}}</td>
                    <td>
                        
                        <a href="/showad/{{$product->name}}">
                            <button class="Show">Show</button>
                        </a>
                        {{-- <a href="/edit/{{$product->id}}">
                            <button  class="Edit">Edit</button>
                        </a> --}}

                        <a  href="/edit/{{$product->name}}"><button  class="Edit">Edit</button></a>
                        <a  href="/delete/{{$product->name}}"onclick="return confirm('confirm delete?')"><button  class="Delete">Delete</button></a>
                        {{-- <form action="/delete/{{$product->name}}" method="post" onclick="return confirm('confirm delete?')">
                        @csrf
                            <button type="submit" style="margin-left: 20px" class="Delete">Delete</button>
                        </form> --}}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</section>

@include('followUs')
@include('footer')

@endsection