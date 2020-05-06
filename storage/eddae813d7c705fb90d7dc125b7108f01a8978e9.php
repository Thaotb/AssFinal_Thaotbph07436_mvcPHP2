<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Categorys</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>

    <div class="container">
        <nav class="nav">
            <a class="nav-link" href="./">Quản lý sản phẩm</a>
            <a class="nav-link" href="./add-product">Thêm sản phẩm</a>
            <a class="nav-link" href="./category">Quản lý danh mục</a>
            <a class="nav-link" href="./add-category">Thêm danh mục</a>
        </nav> -->
        
        <?php $__env->startSection('main-content'); ?>
        <table class="table table-stripped">
            <thead>
                <th>ID</th>
                <th>Cate Name</th>
                <th>Slug</th>
                <th>
                    <a href="./add-category" class="btn btn-success">Add new</a>
                </th>
            </thead>
            <tbody>
                <?php $__currentLoopData = $listItem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($cate->id); ?></td>
                        <td><?php echo e($cate->cate_name); ?></td>
                        <td><?php echo e($cate->slug); ?></td>
                        <td>
                     <a href="edit-category?id=<?php echo e($cate->id); ?>" class="btn btn-primary">Edit</a>
                     <a href="./remove-category?id=<?php echo e($cate->id); ?>" class="btn btn-danger">Remove</a>
                 </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <?php $__env->stopSection(); ?>
  <!--   </div>
    
    
</body>
</html> -->
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PHP2\mvc\app\views/category/index.blade.php ENDPATH**/ ?>