<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="image/logo.png"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Edit Product</title>
</head>
<body>

<h3 style="text-align: center; margin-top: 50px"><b>EDIT PRODUCT</b></h3>
<form style="width: 70%; margin-left: 350px; margin-top: 50px" action = "/update/{{$product->name}}" method="post" class="row g-3">
    @csrf
        <div class="col-md-6" style="float: left; width: 40%">
            <label for="inputEmail4" class="form-label">Name</label>
            <input type="text" name = "name" value="{{$product->name ?? 'None'}}" placeholder="Product name..." class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6" style="float:left; margin-left: 20px; width: 20%">
            <label for="inputPassword4" class="form-label">Price</label>
            <input type="text" name = "price" value="{{$product->price}}" placeholder="Product price..." class="form-control" id="inputPassword4">
        </div>
        <div class="col-12" style="float: left; clear: both; width: 40%">
            <label for="inputAddress" class="form-label" style="margin-top: 20px">Image</label>
            <input type="file" name = "image" value="{{$product->image}}" class="form-control" id="inputAddress">
        </div>
        <div class="col-12" style="float: left; width: 20%; margin-left: 20px">
            <label for="inputAddress2" class="form-label" style="margin-top: 20px">Quantity</label>
            <input type="number" name = "quantity" value="{{$product->quantity}}" class="form-control" id="inputAddress2" placeholder="Product quantity...">
        </div>
        {{-- <div class="col-md-4" style="margin-top: 10px; float: left">
            <label for="inputState" class="form-label" style="margin-top: 20px; width: 100%">Category</label>
            <select id="inputState" class="form-select">
                <option selected>Choose...</option>
                <option>...</option>
            </select>
        </div> --}}
        <div class="col-md-6" style="clear: both; margin-top: 20px">
            <label class="form-label">Description</label>
            <textarea name = "description" class="form-control" placeholder="Description..." id="floatingTextarea">{{$product->description}}</textarea>
        </div>
        <div>
    <button class="btn btn-success" style="border: none; background-color: #43A316;
    width: 170px; margin-left: 100px; float: left; margin-top: 25px">Update</button>
    <button type="reset" class="btn btn-success" style="background: white; color: #333333; width: 170px;
    margin-left: 20px; margin-top: 25px"><a style="text-decoration: none; color: black" href="home.html">Reset</a></button>
        </div>
</form>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</html>