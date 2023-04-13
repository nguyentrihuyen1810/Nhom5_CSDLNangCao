<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ URL::asset('css/admin.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
    <title>Admin</title>
</head>
<body>
<div class="sidebar">
    <div class="logo_content">
        <div class="logo">
            <div class="logo_name" style="color: white">MOBILE STORE</div>
        </div>
        <i class="bx bx-menu" id="btn"></i>
    </div>
    <ul class="nav_list" style="padding-left: 0px;">
        <li>
            <a href="{{url('/admin')}}">
                <i class="bx bx-home-alt"></i>
                <span class="links_name">Product Management</span>
            </a>
            <span class="tooltip">Product Management</span>
        </li>
        <li>
            <a href="{{url('/listUser')}}">
                <i class="bx bx-compass"></i>
                <span class="links_name">User Management</span>
            </a>
            <span class="tooltip">User Management</span>
        </li>
    </ul>

    <div class="profile_content">
        <div class="profile">
            <i class="bx bx-log-out" id="log_out"></i>
        </div>
    </div>
</div>
<div class="home_content">
    <section>
        <div class ="addsp">
            <ul class=addsp1>
                <li><a href="{{url('/createProduct')}}"><button class="btn btn-success" class="add">Create New Product</button></a>
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
                        <td>{{$product->id}}</td>
                        <td><img src="<?php echo asset("image/product/{$product->image}")?>" width=200px height="150px"></td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->description}}</td>
                        <td>
                            <form style="float: left; margin-left:15px; " action="/delete/{{$product->id}}" method="post" onclick="return confirm('Confirm delete?')">
                                @csrf
                                <button type="submit" style="width: 100px" class="Delete">Delete</button>
                            </form>
                            <a href="{{url('/admin/edit', $product->id)}}"><button style="width: 100px" class="Edit">Edit</button></a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </section>
</div>

<script>
    let btn = document.querySelector("#btn");
    let sidebar = document.querySelector(".sidebar");

    btn.onclick = function(){
        sidebar.classList.toggle("active");
    }
</script>

</body>
</html>

