<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
    <title>Edit Profile</title>
</head>
<body>

@include('header')

<h3 style="text-align: center; margin-top: 100px"><b>EDIT PRODUCT</b></h3>
<form style="width: 70%; margin-left: 450px; margin-top: 50px" action = "/profile/update/{{$user->username}}" method="post" class="row g-3">
    @csrf
    <div class="col-md-6" style="float: left; width: 45%; margin-left: 100px">
        <label for="inputEmail4" class="form-label">Fullname</label>
        <input type="text" name = "fullname" value="{{$user->fullname }}" class="form-control" id="inputEmail4">
    </div>
    <div class="col-md-6" style="float: left; width: 45%; margin-left: 100px">
        <label for="inputEmail4" class="form-label">Username</label>
        <input type="text" name = "username" value="{{$user->username }}" class="form-control" id="inputEmail4">
    </div>
    <div class="col-md-6" style="float: left; width: 45%; margin-left: 100px">
        <label for="inputEmail4" class="form-label">Password</label>
        <input type="password" name = "password" value="{{$user->password }}" class="form-control" id="inputEmail4">
    </div>
    <div class="col-md-6" style="float: left; width: 45%; margin-left: 100px">
        <label for="inputEmail4" class="form-label">Address</label>
        <input type="text" name = "address" value="{{$user->address }}" class="form-control" id="inputEmail4">
    </div>
    <div class="col-md-6" style="float: left; width: 45%; margin-left: 100px">
        <label for="inputEmail4" class="form-label">Phone</label>
        <input type="number" name = "phone" value="{{$user->phone }}" class="form-control" id="inputEmail4">
    </div>
    <div class="col-md-6" style="float: left; width: 45%; margin-left: 100px">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" name = "email" value="{{$user->email }}" placeholder="Product name..." class="form-control" id="inputEmail4">
    </div>

    <div class="submit_btn" style="margin-left: 150px">
        <button type="submit" class="btn btn-success" style="border: none; background-color: #43A316; width: 170px;margin-top: 25px;">Update</button>
        <a style="border: none; background-color: white; width: 170px; color: #43A316; border: 1.5px solid #43A316; margin-top: 25px; margin-left: 20px" class="btn btn-primary" href="{{url('/profile', $user->username)}}" role="button">Back</a>
    </div>
</form>


<div style="float: left; height: 150px; width: 100%; margin-top: 50px">
    @include('social')
</div>

<div style="float: left; height: 300px; width: 100%">
    @include('footer')
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</html>

