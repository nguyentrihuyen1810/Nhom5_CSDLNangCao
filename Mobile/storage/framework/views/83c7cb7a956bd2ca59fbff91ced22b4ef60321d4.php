

<?php echo $__env->make('headerAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>
<section>
    <div class="addsp">
        <ul class=addsp1>
            <li><a href="/adcreate">
                    <button style="margin-top: 150px" class="btn btn-success" class="add">Create New Product</button>
                </a>
            </li>
            <br>
        </ul>
    </div>
    <div class="thongbao">
        <p>Product update successfully</p>
    </div>
    <h3 style="margin-top: 40px; text-align: center">PRODUCT MANAGEMENT</h3>
    <div class="product" style="margin-top: 50px">
    <?php if(Session::has('thongbao')): ?>
        <div class="alert alert-success">
            <?php echo e(Session::get('thongbao')); ?>

        </div>
    <?php endif; ?>
        <table>
            <tr>
                <td>No</td>
                <td>Image</td>
                <td>Name</td>
                <td>Details</td>
                <td>Action</td>
            </tr>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($products->id); ?></td>
                    <td><img src="<?php echo asset("image/product/{$product->image}")?>" width=150px height="150px">
                    </td>
                    <td><?php echo e($products->name); ?></td>
                    <td><?php echo e($products->description); ?></td>
                    <td>
                        <a href="/product/showad">
                            <button class="Show">Show</button>
                        </a>
                        <a href="">
                            <button class="Edit">Edit</button>
                        </a>
                        <a href="">
                            <button class="Delete">Delete</button>
                        </a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
</section>

<?php echo $__env->make('followUs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\CODE\Laravel\CSDL_NC\Mobile\resources\views/productmanagement.blade.php ENDPATH**/ ?>