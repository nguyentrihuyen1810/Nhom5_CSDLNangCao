

<?php echo $__env->make('headerAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <h3> Thêm sản phẩm </h3>
                    </div>
                    <div class="col">
                        <a href="#" class="btn btn-primary float-end"> Danh sách sản phẩm </a>
                    </div>  
                </div>
            </div>
            <div class="card-body">
                <form action="/addproduct" method = "POST" >
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col">
        
                            <div class= "form-group">
                                <strong> Tên sản phẩm: </strong>
                                <input type="text" name="name" class="form-control" placeholder=" Nhập tên sản phẩm">
                            </div>
                            <div class= "form-group">
                                <strong> Ảnh sản phẩm: </strong>
                                <input type="file" name="image" class="form-control" placeholder=" Ảnh sản phẩm">
                            </div>
                            <div class= "form-group">
                                <strong> Giá sản phẩm: </strong>
                                <input type="number" name="price" class="form-control" placeholder=" Nhập giá sản phẩm">
                            </div>
                           
                            <div class= "form-group">
                                <strong> Số lượng: </strong>
                                <input type="number" name="quantity" class="form-control" placeholder=" Nhập số lượng">
                            </div>
                            <div class= "form-group">
                                <strong> Mô tả: </strong>
                                <textarea name="description" class="form-control" placeholder=" Mô tả" required></textarea>
                            </div>
                            <div class= "form-group">
                                <strong> Id loại sản phẩm: </strong>
                                <select name="category_name">
                                    <option>Điện Thoại</option>
                                    <option>Phụ Kiện</option>
                                    <option>Máy tính bảng</option>
                                    <option>Smartwatch</option>
                                </select>
                               
                            </div>
                        </div>
                    </div>
                    <button name= "sbm" class ="btn btn-success" type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </div>


<?php echo $__env->make('followUs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\CODE\Laravel\CSDL_NC\Mobile\resources\views/addcreate.blade.php ENDPATH**/ ?>