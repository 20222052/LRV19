@extends('admin.layouts.master')
@section('title', 'Chỉnh Sửa Tài Khoản')
@section('main')


<form action="{{route('user.update', $user->id)}}" method="POST" class="" role="form">
    @csrf   @method('PUT')
    <div class="form-group">
        <label class="" for="">Name</label>
        <input type="text" value="{{$user->name}}" name="name" class="form-control" id="" placeholder="Input Name">
    </div>
    <div class="form-group">
        <label class="" for="">Email</label>
        <input type="text" value="{{$user->email}}" name="email" class="form-control" id="" placeholder="Input Email">
    </div>
    <div class="form-group">
        <label class="" for="">Old Password</label>
        <input type="text" name="old_password" class="form-control" id="" placeholder="Input Password">
    </div>
    <div class="form-group">
        <label class="" for="">Password</label>
        <input type="text" name="password" class="form-control" id="" placeholder="Input Password">
    </div>
    <div class="form-group">
        <label class="" for="">Confrim Password</label>
        <input type="text" name="re_password" class="form-control" id="" placeholder="Input Confrim Password">
    </div>

    <button type="submit" class="btn btn-primary">Tạo mới</button>
</form>


@stop()