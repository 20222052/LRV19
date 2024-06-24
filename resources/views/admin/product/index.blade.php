@extends('admin.layouts.master')
@section('title', 'Quản Lý Sản Phẩm')
@section('main')


<form action="" method="POST" class="form-inline" role="form">

    <div class="form-group">
        <label class="sr-only" for="">label</label>
        <input type="text" name="keyword" class="form-control" id="" placeholder="Input field">
    </div>
    <button type="submit" class="btn btn-primary">Tìm Kiếm</button>
    <a class="btn btn-primary" href="{{route('product.create')}}">Thêm Mới Sản Phẩm</a>
</form>

<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Image</th>
                <th>Status</th>
                <th>Price</th>
                <th>Sale Price</th>
                <th>Dipcription</th>
                <th>Category ID</th>
                <th></th>
            </tr>
        </thead>
        <!-- id	name	image	status	price	sale_price	description	created_at	updated_at	category_id -->
        <tbody>
            @foreach($products as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->image}}</td>
                <td>{{$item->status}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->sale_price}}</td>
                <td>{{$item->description}}</td>
                <td>{{$item->category_id}}</td>
                <td>
                    
                    <form action="{{route('product.destroy', $item->id)}}" method="POST" class="text-right" role="form">
                        @csrf @method('DELETE')
                        <a class="btn btn-primary" href="{{route('product.edit', $item->id)}}">Sửa</a>
                        <button type="submit" class="btn btn-danger">Xóa</button>
                    </form>
                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$products->links()}}
</div>



@stop()