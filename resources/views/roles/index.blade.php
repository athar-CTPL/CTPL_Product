@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Role Management</h2>
        </div>
        <div class="pull-right">
        @can('role-create')
            <a class="btn btn-success" href="{{ route('roles.create') }}"> Create New Role</a>
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
        <th >Action</th>
        
    </tr>
    @foreach($roles as $key => $data)
    <tr>
        <td>
       
        {{$data->name}}
        
        </td>
        <td>
        @can('role-edit')
            <a href="" class="btn btn-primary">Edit</a>| 
        @endcan

        @can('role-delete')
        <form action="{{ route('roles.destroy',$data->id) }}" method="POST">
       
        @csrf
        @method('DELETE')
        
            <button type="submit" class="btn btn-danger" onclick="alert('Are you sure you want to delete')">Delete</button></form>
        @endcan
        </td>
    </tr>
    @endforeach
</table>

@endsection