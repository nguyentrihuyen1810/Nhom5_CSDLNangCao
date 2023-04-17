<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="icon" href="image/logo.png"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/style.css')); ?>" />
</head>
<body>

<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<form style="width: 100%; margin-top: 30px" action = "/profile/<?php echo e($user->id); ?>" method="get" class="row g-3">
    <h3 style="text-align: center; margin-bottom: 50px;">PROFILE</h3>
    <div style="padding: 20px 580px; width: 100%; margin-top: -20px; margin-left: 75px">
            <p>Username&nbsp;: <?php echo e($user->username); ?></p>
            <p>Fullname&ensp;&nbsp;: <?php echo e($user->fullname); ?></p>
            <p>Email&emsp;&ensp;&emsp;: <?php echo e($user->email); ?></p>
            <p>Phone&emsp;&emsp;: <?php echo e($user->phone); ?></p>
            <p>Address&nbsp;&emsp;: <?php echo e($user->address); ?></p>
    </div>
</form>
<a href="<?php echo e(url('/profile/edit', $user->id)); ?>"><button style="width: 200px; background-color: #43A316 ; margin-left: 650px; margin-top: 10px; margin-bottom: 50px" class="Edit">Edit</button></a></div>


<div style="float: left; height: 150px; width: 100%; margin-top: 50px">
    <?php echo $__env->make('social', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>

<div style="float: left; height: 300px; width: 100%">
    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</html><?php /**PATH C:\xampp\htdocs\CODE\Laravel\CSDC_NC1\Mobile\resources\views/user/information.blade.php ENDPATH**/ ?>