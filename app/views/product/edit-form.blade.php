@extends('layouts.main')
@section('main-content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header"><h3 class="text-center font-weight-light my-4">Cập nhật thông tin sản phẩm</h3></div>
                <div class="card-body">
        <form action="./save-edit-product?id={{$model->id}}" method="POST" enctype="multipart/form-data" id="formDemo">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="">Tên sản phẩm</label>
                        <input type="text" name="name" class="form-control" value="{{$model->name}}">
                    </div>
                    <div class="form-group">
                        <label for="">Danh mục</label>
                        <select name="cate_id" class="form-control">
                            @foreach ($cates as $ca)
                            <option 
                                @if($ca->id == $model->cate_id) selected @endif
                                value="{{$ca->id}}">{{$ca->cate_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Giá sản phẩm</label>
                        <input type="text" name="price" class="form-control" value="{{$model->price}}">
                    </div>
                    <div class="form-group">
                        <label for="">Mô tả ngắn</label>
                        <textarea name="short_desc" class="form-control" rows="4">{{$model->short_desc}}</textarea>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-4 offset-4">
                            <img src="{{$model->image}}" class="img-fluid">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Ảnh sản phẩm</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Đánh giá</label>
                        <input type="text" step="0.1" name="star" class="form-control" value="{{$model->star}}">
                    </div>
                    <div class="form-group">
                        <label for="">Lượt xem</label>
                        <input type="text" name="views" class="form-control" value="{{$model->views}}">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="">Chi tiết</label>
                        <textarea name="detail" class="form-control" rows="6">{{$model->detail}}</textarea>
                    </div>
                </div>
                <div class=" col-12 text-center">
                    <button type="submit" class="btn btn-info">Lưu</button>
                    <a href="./" class="btn btn-danger">Hủy</a>
                </div>
            </div>
        </form>
         </div>
        </div>
    </div>
</div>

</div>

@endsection