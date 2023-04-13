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
                <li><a href="{{url('/createUser')}}"><button class="btn btn-success" class="add">Create New Admin</button></a>
                </li><br>
            </ul>
        </div>
        <div class="thongbao">
            <p>User delete successfully</p>
        </div>
        <div class="product">
            <table>
                <tr>
                    <td>No</td>
                    <td>Full name</td>
                    <td>Username</td>
                    <td>Phone</td>
                    <td>Address</td>
                    <td>Email</td>
                    <td>Action</td>
                </tr>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->fullname}}</td>
                        <td>{{$user->username}}</td>
                        <td>{{$user->phone}}</td>
                        <td>{{$user->address}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            <form style="float: left; margin-left:15px; " action="/destroy/{{$user->id}}" method="post" onclick="return confirm('Confirm delete?')">
                                @csrf
                                <button style="margin-left: 30px" class="Delete">Delete</button>
                            </form>
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

