
      
@extends('layouts.main')
@section('main-content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header"><h3 class="text-center font-weight-light my-4">Chỉnh sửa danh mục</h3></div>
                <div class="card-body">
        <form action="./save-edit-category?id={{$model->id}}" method="POST" enctype="multipart/form-data" id="formDemo">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">Tên danh mục</label>
                        <input type="text" name="cate_name" class="form-control" value="{{$model->cate_name}}" required>
                    </div>
                </div>
                <div class=" col-12 text-center">
                    <button type="submit" class="btn btn-info">Lưu</button>
                    <a href="./category" class="btn btn-danger">Hủy</a>
                </div>
            </div>
        </form>
         </div>
        </div>
    </div>
</div>

</div>
@endsection