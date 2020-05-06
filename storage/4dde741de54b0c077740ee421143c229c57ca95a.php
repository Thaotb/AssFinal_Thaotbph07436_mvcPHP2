<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Main layout</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="container" style="width: ">
		<div class="header d-flex justify-content-start" style="height:; border: solid 1px #ccc;">
			 <nav class="nav">
            <a class="nav-link" href="./">Trang chủ</a>
            <a class="nav-link" href="./add-product">Thêm sản phẩm</a>
            <a class="nav-link" href="./category">Danh mục</a>
            <a class="nav-link" href="./add-category">Thêm danh mục</a>
        </nav>
		</div>
		<div class="row">
			<div class="col-10" style="height:1000px">
				<?php echo $__env->yieldContent('main-content'); ?>
			</div>
			<div class="col-2" style="height:1000px ; background: pink">
				<h2>Aside</h2>
			</div>
		</div>
		<div class="footer" style="height: 150px;background: green">
			<h2>footer</h2>
		</div>
	</div>
</body>
</html><?php /**PATH C:\xampp\htdocs\PHP2\mvc\app\views/layouts/main.blade.php ENDPATH**/ ?>