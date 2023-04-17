
<?php echo $__env->make('headerAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>
<section>
    <h3 style="margin-top: 180px; text-align: center">REVENUE</h3>
    <div class="product" style="margin-top: 50px">
   
        <table>
            <tr>
                <td>No</td>
                <td>Image</td>
                <td>Name</td>
                <td>Price</td>
                <td>Quantity</td>
                <td>Total Price</td>
            </tr>
            <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($key + 1); ?></td>
                <td><img src="<?php echo e(asset('image/product/' . $product->image)); ?>" width="150" height="150"></td>
                <td><?php echo e($product->name); ?></td>
                <td><?php echo e($product->price); ?></td>
                <td><?php echo e($product->quantity); ?></td>
                <td><?php echo e($product->total_sales); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
</section>


<?php echo $__env->make('followUs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\CODE\Laravel\CSDL_NC\Mobile\resources\views/Revenue.blade.php ENDPATH**/ ?>