@extends('layout')
@include('headerAdmin')

@section('content')
<section>
    <h3 style="margin-top: 180px; text-align: center">REVENUE</h3>
    <div class="product" style="margin-top: 50px">
   
        <table>
            <tr>
                <td>No</td>
                <td>Image</td>
                <td>Name</td>
                <td>Price</td>
                <td>Quantity</td>
                <td>Total Price</td>
            </tr>
            @foreach ($results as $result)
            <tr>
                <td>{{ $result->product_id }}</td>
                <td><img src="{{ asset('image/product/' . $result->product_image) }}" width="150" height="150"></td>
                <td>{{ $result->product_name }}</td>
                <td>{{ $result->quantity }}</td>
                <td>{{ $result->total_sales }}</td>
            </tr>
        @endforeach
        </table>
    </div>
</section>


@include('followUs')
@include('footer')
@endsection