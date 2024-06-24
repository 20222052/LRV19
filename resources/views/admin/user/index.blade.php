@extends('admin.layouts.master')
@section('title', 'Quản Lý Tài Khoản')
@section('main')


<form action="" method="get" class="form-inline" role="form">
    @csrf
    <div class="form-group">
        <label class="sr-only" for="">label</label>
        <input type="text" name="keyword" class="form-control" id="" placeholder="Input field">
    </div>
    <button type="submit" class="btn btn-primary">Tìm Kiếm</button>
    <a class="btn btn-primary" href="{{route('user.create')}}">Thêm Mới Tài Khoản</a>
</form>

<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>name</th>
                <th>email</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    
                    <form action="{{route('user.destroy', $user->id)}}" method="POST" class="text-right" role="form">
                        @csrf @method('DELETE')
                        <a class="btn btn-primary" href="{{route('user.edit', $user->id)}}">Sửa</a>
                        <button type="submit" class="btn btn-danger">Xóa</button>
                    </form>
                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>



@stop()