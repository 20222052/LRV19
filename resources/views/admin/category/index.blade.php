@extends('admin.layouts.master')
@section('title', 'Quản Lý Danh Mục')
@section('main')

<form action="" method="GET" class="form-inline" role="form">
    @csrf
    <div class="form-group">
        <label class="sr-only" for="">Keyword</label>
        <input type="text" name="keyword" class="form-control" id="" placeholder="Input Keyword">
    </div>
    <button type="submit" class="btn btn-primary">Tìm Kiếm</button>
    <a href="{{route('category.create')}}" class="btn btn-primary">Thêm Mới</a>
</form>


<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>TRẠNG THÁI</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($cats as $cat)
            <tr>
                <td>{{$cat->id}}</td>
                <td>{{$cat->name}}</td>
                <td>{{$cat->status==0?'Tam An':'Hien Thi'}}</td>
                <td>
                    
                    <form action="{{route('category.destroy', $cat->id)}}" method="POST" class="form-inline" role="form">
                        @csrf @method('DELETE')
                        <a class="btn btn-primary" href="{{route('category.edit', $cat->id)}}">Sửa</a>
                        <button type="submit" class="btn btn-danger">Xóa</button>
                    </form>
                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$cats->links()}}
</div>


@stop()