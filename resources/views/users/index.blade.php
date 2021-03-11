@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Users Management</h2>
        </div>
        <div class="pull-right">
        
            <a class="btn btn-success" href="{{ route('users.create') }}">Create New User</a>
      
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
        <th>Email</th>
        <th>Role</th>
        <th>Action</th>
    </tr>
    @foreach($users as $key => $data)
    <tr>
        <td>{{$data->name}}</td>
        <td>{{$data->email}}</td>
        <td>
        @if(!empty($data->getRoleNames()))
            @foreach($data->getRoleNames() as $v)
            <label class="badge badge-success">{{ $v }}</label>
            @endforeach
        @endif
        </td>
        <td><a href="{{route('users.edit',$data->id)}}" class="btn btn-primary">Edit</a>| 
        <form action="{{route('users.destroy',$data->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="alert('Are you sure you want to delete')">Delete</button></form>
        </td>
    </tr>
    @endforeach
</table></br>

@endsection