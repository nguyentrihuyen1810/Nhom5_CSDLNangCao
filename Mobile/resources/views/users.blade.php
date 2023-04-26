@extends('layout')

@include('headerAdmin')

@section('content')
<section>
{{--    
    <div class="thongbao">
        @if (Session::has('thongbao'))
        <div class="alert alert-success">
            {{Session::get('thongbao')}}
        </div>
    @endif --}}
        {{-- <p>Product update successfully</p> --}}
    </div>
    <h3 style="margin-top: 180px; text-align: center">USER MANAGEMENT</h3>
    <div class="product" style="margin-top: 50px">
   
        <table>
            <tr>
                <td>No</td>
                <td>Username</td>
                <td>Phone</td>
                <td>email</td>
                <td>Action</td>
            </tr>
            @foreach ($customers as $customer)
            @if ($customer->role == '')
                <tr>
                    <td>{{$customer->id}}</td>
                    <td>{{ $customer->username }}</td>
                    <td>{{$customer->phone}}</td>
                    <td>{{$customer->email}}</td>
                    
                    <td>
                        <a href="/showuser/{{$customer->id}}">
                            <button class="Show">Show</button>
                        </a>
                        
                        <a  href="/deleteuser/{{$customer->id}}"onclick="return confirm('confirm delete?')"><button  class="Delete">Delete</button></a>
                      
                </tr>
            @endif
        @endforeach
        
        </table>
    </div>
</section>

@include('followUs')
@include('footer')

@endsection