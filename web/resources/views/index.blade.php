<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Admin</title>
    <link rel="icon" href="image/logo.png"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
</head>
<body>
<iframe src="headerAdmin.html" scrolling="no" style="width: 100%; height: 180px; overflow:hidden"></iframe>

<section>
    <div class ="addsp">
        <ul class=addsp1>
            <li><a href=""><button class="btn btn-success" class="add">Create New Product</button></a>
            </li><br>
        </ul>
    </div>
    <div class="thongbao">
        <p>Product update successfully</p>
    </div>
    <div class="product">
        <table>
            <tr>
                <td>No</td>
                <td>Image</td>
                <td>Name</td>
                <td>Details</td>
                <td>Action</td>
            </tr>
            @foreach($products as $product)
            <tr>
                <td>{{++$i}}</td>
                <td><img src="<?php echo asset("image/product/{$product->image}")?>" width=150px height="150px"></td>
                <td>{{$product -> name}}</td>
                <td>{{$product -> description}}</td>
                <td>
{{--                    <form action="" method="POST">--}}

                        <a class="btn btn-info" href="">Show</a>

                        <a class="btn btn-primary" href="/list/edit/{{$product->name}}">Edit</a>

{{--                        @csrf--}}
{{--                        @method('DELETE')--}}

                        <button type="submit" class="btn btn-danger">Delete</button>
{{--                    </form>--}}
                </td>
            </tr>
            @endforeach
        </table>

        {!! $products -> links() !!}
    </div>
</section>

<div style="float: left; height: 150px; width: 100%">
    <iframe src="followUs.html" scrolling="no" style="overflow:hidden; width: 100%; height: 100%"></iframe>
</div>

<div style="float: left; height: 301px; width: 100%">
    <iframe src="footer.html" scrolling="no" style="overflow:hidden; width: 100%; height: 100%"></iframe>
</div>

</body>
</html>
