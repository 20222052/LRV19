@extends('admin.layouts.master')

@section('title', 'Chỉnh Sửa Danh Mục')

@section('main')

<form action="{{route('product.update')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-8">
            <div class="form-group">
                <label for="">Name</label>
                <input type="" name="name" class="form-control" placeholder="Input New Name">
            </div>
            @error('name')

            <small>{{$message}}</small>
            @enderror
            <div class="form-group" >
                <label for="">Dipcription</label>
                <textarea value="" name="dipcription" id="summernote" class="form-control depcription" placeholder="Input New dipcription"></textarea>
            </div>
            <div class="form-group">
                <label for="">Image</label>
                <input type="file" name="image" class="form-control" placeholder="Input New dipcription">
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="">Price</label>
                <input type="" name="price" class="form-control" placeholder="Input New price">
            </div>
            <div class="form-group">
                <label for="">Sale Price</label>
                <input type="" name="sale_price" class="form-control" placeholder="Input New sale_price">
            </div>
            <div class="form-group">
                <label for="">Danh Mục</label>
                <select name="category_id" id="input" class="form-control" required="required">
                    <option value="">Chọn 1 Danh Mục</option>
                    @foreach($data as $cat)
                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

    </div>
    <button type="submit" class="btn btn-primary">Tạo Mới</button>
</form>


@stop()