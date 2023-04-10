<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Shop</title>
    <link rel="icon" href="image/logo.png"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
</head>
<body>

@include('header')

<div style="padding: 20px; margin-top: 20px; width: 100%; border: 1px solid #777777">
    <a style="margin: 10px 0px; color: #777777">SHOP</a><br>
    <a>Home / </a><a style="color:#43A316">Shop</a>
</div>

<div style="width: 15%; float: left; padding: 10px 20px; margin-top: 30px">
    <a style="color: #777777;margin-left: 35px;">CATEGORIES</a><br>
    <div class="radio" style="margin-top: 20px; margin-bottom: 10px;">
        <input style="margin-right: 10px;" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
        <label style="color: #777777" class="form-check-label" for="flexRadioDefault1">Cables</label>
    </div>
    <div class="radio" style="margin: 10px 0;">
        <input style="margin-right: 10px;" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
        <label style="color: #777777" class="form-check-label" for="flexRadioDefault2">Cases</label>
    </div>
    <div class="radio" style="margin: 10px 0;">
        <input style="margin-right: 10px;" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
        <label style="color: #777777" class="form-check-label" for="flexRadioDefault3">Headphones</label>
    </div>
    <div class="radio" style="margin: 10px 0;">
        <input style="margin-right: 10px;" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
        <label style="color: #777777" class="form-check-label" for="flexRadioDefault4">Mobiles</label>
    </div>
    <div class="radio" style="margin: 10px 0;">
        <input style="margin-right: 10px;" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
        <label style="color: #777777" class="form-check-label" for="flexRadioDefault5">Software</label>
    </div>
</div>

<div style="width:85%;float: left; padding: 10px 20px; margin-top: 30px; border-left: 1px solid #777777">
    <div>
        @foreach ($products as $product)
            <div class="card" style="width: 285px;  margin: 0 0 40px 40px; float: left">
                <img style="width: 160px; height: 150px; margin-left: 50px; margin-top: 20px" src="<?php echo asset("image/product/{$product->image}")?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="{{url('/shop/show', $product->name)}}" style = "text-decoration: none; color: black; margin-left: 70px"><h5 style = "text-align: center" class="card-title">{{ $product->name }}</h5></a>
                    <p style = "color: #DD4466; text-align: center" class="card-text"><b>${{ $product->price }}</b></p>
                </div>
            </div>
        @endforeach
    </div>
</div>

<div style="float: left; height: 150px; width: 100%">
    @include('social')
</div>

<div style="float: left; height: 301px; width: 100%">
    @include('footer')
</div>

</body>
</html>
