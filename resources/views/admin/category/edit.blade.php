@extends('admin.layouts.master')
@section('title', 'Thêm Mới Danh Mục')
@section('main')

<form action="{{route('category.update', $cats->id)}}" method="POST" class="" role="form">
    @csrf @method('PUT')
    <div class="form-group">
        <label class="" for="">Name</label>
        <input type="text" value="{{$cats->name}}" name="name" class="form-control" id="" placeholder="Input Name">
    </div>
    <div class="form-group">
        <label class="" for="">Status</label>
        <select name="status" class="form-control" required="required">
            <option value="0" {{ $cats->status == 0 ? 'checked' : '' }} >Tạm Ẩn</option>
            <option value="1"{{ $cats->status == 1 ? 'checked' : '' }}>Hiển thị</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Tạo Mới</button>
</form>
@stop()