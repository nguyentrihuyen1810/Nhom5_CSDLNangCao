<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="icon" href="image/logo.png"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/style.css')); ?>" />
</head>
<body>


<div class="header" style="width:100%; height: 180px">
    <div class="header1">
        <ul>
            <li>
                <div class = "headerTitle">
                    <img src="image/icon/iconWishlist.png">
                </div>
                <a style="float: left; margin-left: 15px" href="">Wishlist</a>
            </li>
            <li>
                <div class = "headerTitle">
                    <img src="image/icon/iconCheckout.png">
                </div>
                <a style="float: left; margin-left: 15px" href="/logout">Checkout</a>
            </li>
            
            <li style="margin-left: 550px">
                <div class = "headerTitle">
                    <img src="image/icon/iconMyCart.png">
                </div>
                <a style="float: left; margin-left: 15px" href="#">My Cart</a>
            </li>
            <li>
                <div class = "headerTitle" style="margin-top: 8px">
                    <i  style="color:white; font-size:30px" class="bi bi-person"></i>
                </div>
               
                <?php if(session('customer')): ?>
                <a href="/information/{id}" style="float: left; margin-left: 15px ;color:white;margin-top:20px"> <?php echo e(session('customer')->username); ?></a></p>
                <?php endif; ?>
               
            </li>
        </ul>

        
    </div>
    <div class="col-4 nav" style="width: 100%;">
        <div class="logo">
            <i style="margin-top: 20px" class="fa fa-star icon-star"></i>
            <a style="margin-top: 35px" href="" class="mobile">MOBILE</a>
            <a style="margin-top: 35px" href="" class="store">STORE</a>
        </div>
        <ul style="margin-top: 40px;margin-bottom: 0px;">
            <li><a href="/home">HOME</a></li>
            <li><a href="/shopus">SHOP</a></li>
            
            <li><a href="#">BLOG</a></li>
        </ul>
        <div class = "search" style="margin-top: 30px; margin-bottom: 0px;">
            <form action="/searchus" class="d-flex" role="search" method="post">
            <?php echo csrf_field(); ?>
                <input style="height: 40px" class="form-control me-2" name="search" type="search" aria-label="Search">
                <button style="border:none; background-color: #43A316; height: 40px" class="btn btn-outline-success" type="submit"><img src="image/icon/iconSearch.png"></button>
            </form>
        </div>
    </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</html><?php /**PATH D:\Xampp1\htdocs\CSDLNangCao\Mobile\resources\views/headerUser.blade.php ENDPATH**/ ?>