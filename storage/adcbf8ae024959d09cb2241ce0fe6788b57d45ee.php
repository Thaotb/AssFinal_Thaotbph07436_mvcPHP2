
<?php $__env->startSection('main-content'); ?>


<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header"><h3 class="text-center font-weight-light my-4">Thêm mới danh mục</h3></div>
                <div class="card-body">
                   <form action="./save-add-category" method="POST" enctype="multipart/form-data" id="formDemo">
                    
                    <div class="col-10">
                        <div class="form-group">
                            <label for="">Tên Danh Mục</label>
                              <input type="text" name="cate_name" class="form-control" required>
                        </div>     
                        <div class=" col-12 text-center">
                            <button type="submit" class="btn btn-info">Lưu</button>
                            <a href="./category" class="btn btn-danger">Hủy</a>
                            
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</div>
<script>
     $(document).ready(function() {
 //Khi bàn phím được nhấn và thả ra thì sẽ chạy phương thức này
 $("#formDemo").validate({
     rules: {
         cate_name: "required"
         
        
     },
     messages: {
         cate_name: "Tên danh mục không được bỏ trống"
         
        
     }
 });
});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PHP2\mvcTest\app\views/category/add-form.blade.php ENDPATH**/ ?>