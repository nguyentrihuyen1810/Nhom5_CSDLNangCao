

<?php echo $__env->make('headerAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>
<section>

        
    </div>
    <h3 style="margin-top: 180px; text-align: center">USER MANAGEMENT</h3>
    <div class="product" style="margin-top: 50px">
   
        <table>
            <tr>
                <td>No</td>
                <td>Username</td>
                <td>Phone</td>
                <td>email</td>
                <td>Action</td>
            </tr>
            <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($customer->role == ''): ?>
                <tr>
                    <td><?php echo e($customer->id); ?></td>
                    <td><?php echo e($customer->username); ?></td>
                    <td><?php echo e($customer->phone); ?></td>
                    <td><?php echo e($customer->email); ?></td>
                    
                    <td>
                        <a href="/showuser/<?php echo e($customer->id); ?>">
                            <button class="Show">Show</button>
                        </a>
                        
                        <a  href="/deleteuser/<?php echo e($customer->id); ?>"onclick="return confirm('confirm delete?')"><button  class="Delete">Delete</button></a>
                      
                </tr>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        </table>
    </div>
</section>

<?php echo $__env->make('followUs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp1\htdocs\CSDLNangCao\Mobile\resources\views/users.blade.php ENDPATH**/ ?>