<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>Product Detail</title>
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/style.css')); ?>"/>
    <link rel="icon" href="image/logo.png"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<?php echo $__env->make('headerAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<form style="width: 100%" action = "/shop/show/<?php echo e($customers->id); ?>" method="get" class="row g-3">
    <h3 style="margin-top: 100px; text-align: center">CUSTOMER DETAIL</h3>
    <div class="showuser" >
        <table>
            <tr>
                <td>ID</td>
                <td><?php echo e($customers->id); ?></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><?php echo e($customers->username); ?></td>
            </tr>
            <tr>
                <td>Fullname</td>
                <td><?php echo e($customers->fullname); ?></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><?php echo e($customers->password); ?></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><?php echo e($customers->phone); ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?php echo e($customers->email); ?></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><?php echo e($customers->address); ?></td>
            </tr>


        </table>
    </div>

   
</form>

<div style="float: left; height: 150px; width: 100%; margin-top: 50px">
    <?php echo $__env->make('followUs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>

<div style="float: left; height: 300px; width: 100%">
    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
        crossorigin="anonymous"></script>
</html>
<?php /**PATH C:\xampp\htdocs\CODE\Laravel\CSDC_NC1\Mobile\resources\views/showuser.blade.php ENDPATH**/ ?>