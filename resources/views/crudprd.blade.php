<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Admin</title>
    <link rel="icon" href="image/logo.png"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}"/>
</head>
<body>
@include('headerAdmin')

<section>
    <div class="addsp">
        <ul class=addsp1>
            <li><a href="">
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
        <table>
            <tr>
                <td>No</td>
                <td>Image</td>
                <td>Name</td>
                <td>Details</td>
                <td>Action</td>
            </tr>
            @foreach ($all_product as $all_product)
                <tr>
                    <td>{{$all_product->id}}</td>
                    <td><img src="<?php echo asset("image/product/{$all_product->image}")?>" width=150px height="150px">
                    </td>
                    <td>{{$all_product->name}}</td>
                    <td>{{$all_product->description}}</td>
                    <td>
                        <a href="/show/{{$all_product->id}}">
                            <button class="Show">Show</button>
                        </a>
                        <a href="/edit/{{$all_product->id}}">
                            <button  class="Edit">Edit</button>
                        </a>
                        <form action="/delete/{{$all_product->name}}" method="post" onclick="return confirm('confirm delete?')">
                        @csrf
                            <button type="submit" style="margin-left: 20px" class="Delete">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</section>

<div style="float: left; width: 100%">
    @include('followUs')
</div>

<div style="float: left; width: 100%">
    @include('footer')
</div>

</body>
<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<script>
    function ConfirmDelete(msg)
    {}
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
</script> -->
</html>
