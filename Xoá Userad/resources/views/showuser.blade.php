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
<form style="width: 100%" action = "/shop/show/{{$customers->id}}" method="get" class="row g-3">
    <h3 style="margin-top: 100px; text-align: center">CUSTOMER DETAIL</h3>
    <div class="showuser" >
        <table>
            <tr>
                <td>ID</td>
                <td>{{$customers->id}}</td>
            </tr>
            <tr>
                <td>Username</td>
                <td>{{$customers->username}}</td>
            </tr>
            <tr>
                <td>Fullname</td>
                <td>{{$customers->fullname}}</td>
            </tr>
            <tr>
                <td>Password</td>
                <td>{{$customers->password}}</td>
            </tr>
            <tr>
                <td>Phone</td>
                <td>{{$customers->phone}}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>{{$customers->email}}</td>
            </tr>
            <tr>
                <td>Address</td>
                <td>{{$customers->address}}</td>
            </tr>


        </table>
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
