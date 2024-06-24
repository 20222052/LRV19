@extends('admin.layouts.master')
@section('title', 'Thêm Mới Danh Mục')
@section('main')

<form action="{{route('category.store')}}" method="POST" class="" role="form">
    @csrf
    <div class="form-group">
        <label class="" for="">Name</label>
        <input type="text" name="name" class="form-control" id="" placeholder="Input Name">
    </div>
    <div class="form-group">
        <label class="" for="">Status</label>
        <select name="status" id="input" class="form-control" required="required">
            <option value="0">Tạm Ẩn</option>
            <option value="1">Hiển thị</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Tạo Mới</button>
</form>
@stop()