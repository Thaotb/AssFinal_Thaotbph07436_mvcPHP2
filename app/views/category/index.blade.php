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
 @extends('layouts.main')
        @section('main-content')
        <div class="container-fluid">
              <h4 class="text-success">{{$messenger}}</h4>
            <div class="card mb-4">
                <div class="card-header"><i class="fas fa-table mr-1"></i>Danh sách danh mục </div>
                
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <th>ID</th>
                <th>Cate Name</th>
                <th>
                    <a href="./add-category" class="btn btn-success">Add new</a>
                </th>
            </thead>
            <tbody>
                @foreach($listCate as $cates)
                    <tr>
                        <td>{{$cates->id}}</td>
                        <td>{{$cates->cate_name}}</td>
                        <td>
                     <a href="edit-category?id={{$cates->id}}" class="btn btn-primary">Edit</a>
                     <a href="./remove-category?id={{$cates->id}}" class="btn btn-danger" data-toggle="modal" data-target="#modalConfirmDelete">Remove</a>
                 </td>
                    </tr>
                @endforeach
            </tbody>
         </table>
     </div>
 </div>


    <div class="modal fade" id="modalConfirmDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
   aria-hidden="true">
   <div class="modal-dialog modal-sm modal-notify modal-danger" role="document">
    <!--Content-->
    <div class="modal-content text-center">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center">
        <p class="heading">Bạn có chắc chắn muốn xóa?</p>
    </div>
    <!--Body-->
    <div class="modal-body">
        <i class="far fa-trash-alt fa-4x animated rotateIn"></i>
    </div>
    <!--Footer-->
    <div class="modal-footer d-flex justify-content-center">
 
          
                <a href="./remove-category?id={{$cates->id}}" class="btn btn-danger">Yes</a>
           
          
                <a type="button" class="btn btn-danger waves-effect" data-dismiss="modal">No</a>
            
        </div>
    </div>
</div>
<!--/.Content-->
</div>
 @endsection
  <!--   </div>
    
    
</body>
</html> -->