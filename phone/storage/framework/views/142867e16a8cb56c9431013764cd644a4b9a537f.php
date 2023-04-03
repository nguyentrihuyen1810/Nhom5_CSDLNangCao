<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/style.css')); ?>" />
    <link rel="icon" href="image/logo.png"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
        <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card" style="width: 270px;  margin: 0 0 40px 40px; float: left">
            <img style="width: 160px; height: 150px; margin-left: 50px; margin-top: 20px" src="<?php echo asset("image/product/{$product->image}")?>" class="card-img-top" alt="...">
            <div class="card-body">
                <a href="" style = "text-decoration: none; color: black; margin-left: 70px"><h5 style = "text-align: center" class="card-title"><?php echo e($product->name); ?></h5></a>
                <p style = "color: #DD4466; text-align: center" class="card-text"><b>$<?php echo e($product->price); ?></b></p>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<div style="clear:both"></div>

<div class="page" style="padding: 0 572px;">
    <button style="border:none; height: 40px; width: 40px; background-color: #0000002f" name="page1">
        <a style="margin-left: 5px;">1</a>
    </button>
    <button style="border:none; height: 40px; width: 40px; background-color: #0000002f" name="page2">
        <a style="margin-left: 5px;">2</a>
    </button>
    <button style="border:none; height: 40px; width: 40px; background-color: #0000002f" name="page3">
        <a style="margin-left: 5px;">3</a>
    </button>
    <button style="border:none; height: 40px; width: 70px; background-color: #0000002f" name="pagenext">
        <a style="margin-left: 5px;">Next</a>
    </button>
</div>

<div style="float: left; height: 150px; width: 100%; margin-top: 50px">
    <?php echo $__env->make('followUs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>

<div style="float: left; height: 300px; width: 100%">
    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</html>

<?php /**PATH D:\Xampp\htdocs\CSDLNangCao\phone\resources\views/product/index.blade.php ENDPATH**/ ?>