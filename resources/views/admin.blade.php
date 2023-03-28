<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Admin</title>
    <link rel="icon" href="image/logo.png"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
{{-- <iframe src="header.html" scrolling="no" style="width: 100%; height: 180px; overflow:hidden"></iframe> --}}
@include("header")


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
                <tr>
                    <td>1</td>
                    <td><img src="image/product/Iphone14PM.png" width=200px height="150px"></td>
                    <td>iPhone 14 Pro Max</td>
                    <td>
                        <b>Sceen:</b> OLED6.7"Super Retina XDR <br>
                        <b>RAM:</b> 6 GB <br>
                        <b>Storare</b>: 128 GB <br>
                        <b>OS:</b> iOS 16
                    </td>
                    <td>
                        <a href=""><button class="Show">Show</button></a>
                        <a href=""><button class="Edit">Edit</button></a>
                        <a href=""><button class="Delete">Delete</button></a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><img src="image/product/OppoReno8.png" width=150px height="150px"></td>
                    <td>OPPO Reno8 Pro</td>
                    <td>
                        <b>Screen:</b> AMOLED6.7"Full HD+ <br>
                        <b>RAM:</b> 12 GB <br>
                        <b>Strorage:</b> 256 GB <br>
                        OS: Android 12
                    </td>
                    <td>
                        <a href=""><button class="Show">Show</button></a>
                        <a href=""><button class="Edit">Edit</button></a>
                        <a href=""><button class="Delete">Delete</button></a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><img src="image/product/SamsungGA23.png" width=150px height="150px"></td>
                    <td>Samsung Galaxy A23</td>
                    <td>
                        <b>Screen:</b> PLS TFT LCD6.6"Full HD+ <br>
                        <b>RAM:</b> 4 GB <br>
                        <b>Storage:</b> 128 GB <br>
                        <b>OS:</b> Android 12
                    </td>
                    <td>
                        <a href=""><button class="Show">Show</button></a>
                        <a href=""><button class="Edit">Edit</button></a>
                        <a href=""><button class="Delete">Delete</button></a>
                    </td>
                </tr>
            </table>
        </div>
    </section>
    @include("followUs")

    @include("footer")
{{-- <div style="float: left; height: 150px; width: 100%">
    <iframe src="followUs.html" scrolling="no" style="overflow:hidden; width: 100%; height: 100%"></iframe>
</div>

<div style="float: left; height: 301px; width: 100%">
    <iframe src="footer.html" scrolling="no" style="overflow:hidden; width: 100%; height: 100%"></iframe>
</div> --}}

</body>
</html>
