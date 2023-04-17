<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>Product Detail</title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}"/>
    <link rel="icon" href="image/logo.png"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
@include('headerAdmin')
<form style="width: 100%; margin-top: 50px" action = "/shop/show/{{$product->name}}" method="get" class="row g-3">
    <div style="padding: 20px; width: 100%; border: 1px solid #777777">
        <a style="margin: 10px 0px; color: #454545">{{$product->name}}</a><br>
    </div>

    <div style="width: 50%; float: left; padding: 65px 0 40px 130px; ">
        <img src="<?php echo asset("image/product/{$product->image}")?>" alt="iphone11" width="300px" height="400px">
    </div>
    <div style="width:50%; float: left; padding: 65px 20px 0 20px; ">
        <h4 style="margin-bottom: 50px; color:red">Giá: ${{$product->price}}</h4>
        <p>Số lượng: {{$product->quantity}} </p><br>
        <p>Loại sản phẩm: {{$product->Category_id}} </p><br>
       
    </div>

    <div style="clear:both"></div>

    <div style=" width: 96%; margin: 10px 30px;">
        <button class="btn btn-outline-secondary" style="background-color: #0000002f; border: none; height: 40px;"><a style="text-align: center; color: #333333">Description</a></button>
        <button class="btn btn-outline-secondary" style="background-color: #0000002f; border: none; height: 40px;"><a style="text-align: center; color: #333333">Reviews</a></button>
    </div>

    <div style="padding: 20px; width: 96%; border: 1px solid #777777;margin:0 30px;">
        <p>Description</p>
        <p>{{$product->description}}</p>
    </div>
</form>

<div style="float: left; height: 150px; width: 100%; margin-top: 50px">
    @include('followUs')
</div>

<div style="float: left; height: 300px; width: 100%">
    @include('footer')
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
        crossorigin="anonymous"></script>
</html>