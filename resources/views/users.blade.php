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
                        <a href="">
                            <button class="Show">Show</button>
                        </a>
                        {{-- <a href="{{ route('customer.delete', $customer->id) }}" onclick="return confirm('Bạn chắc chắn muốn xóa khách hàng này?')">
                            <button class="Deleteuser">Delete</button>
                        </a>
                         --}}
                         <form action="{{ route('customer.delete', $customer->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Xóa khách hàng</button>
                        </form>
                    </td>
                </tr>
            @endif
        @endforeach
        
        </table>
    </div>
</section>

@include('followUs')
@include('footer')

@endsection