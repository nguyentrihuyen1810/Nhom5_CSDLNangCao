<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="with=device-width, initial-scale=1.0">
  <title>Shop</title>
  <link rel="icon" href="image/logo.png"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo e(URL::asset('css/style.css')); ?>" />
</head>
<body>
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div style="padding: 20px; width: 100%; border: 1px solid #777777">
    <a style="margin: 10px 0px; color: #777777">SEARCH</a><br>
    <a>Home / </a><a style="color:#43A316">Search</a>
</div>

<div style="width:100%;float: left; padding: 10px 20px; margin-top: 30px; border-left: 1px solid #777777">
        <?php $__currentLoopData = $listsp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $all_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card" style="width: 270px;  margin: 0 0 40px 40px; float: left">
            <img style="width: 160px; height: 150px; margin-left: 50px; margin-top: 20px" src="<?php echo asset("image/product/{$all_product->image}")?>" class="card-img-top" alt="...">
            <div class="card-body">
                <a href="" style = "text-decoration: none; color: black; margin-left: 70px"><h5 style = "text-align: center" class="card-title"><?php echo e($all_product->name); ?></h5></a>
                <p style = "color: #DD4466; text-align: center" class="card-text"><b>$<?php echo e($all_product->price); ?></b></p>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

<?php echo $__env->make('followUs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</html><?php /**PATH C:\xampp\htdocs\mobile\mobile\resources\views//search.blade.php ENDPATH**/ ?>