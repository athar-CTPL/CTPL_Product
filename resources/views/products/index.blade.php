@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Products</h2>
            </div>
            <div class="pull-right">
            @can('product-create')
                <a class="btn btn-success" href="{{route('products.create')}}">Create New Product</a>
            @endcan
            </div>
        </div>
    </div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif

    <table class="table table-hover" ></br>
        <tr>
            <th>Name</th>
            <th>description</th>
            <th>Action</th>
            
        </tr>
        @foreach($product as $data)
        <tr>
            <td>{{$data->name}}</td>
            <td>{{$data->discription}}</td>
            <td>
            <td>
                @can('product-edit')
                <a href="{{route('products.edit',$data->id)}}" class="btn btn-primary">Edit</a>| 
                @endcan
                <form action="{{route('products.destroy',$data->id)}}" method="POST">
                @csrf
                @method('DELETE')
                @can('product-delete')
                    <button type="submit" class="btn btn-danger" onclick="alert('Are you sure you want to delete')">Delete</button>
                @endcan</form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection