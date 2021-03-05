@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>{{ __('User Data') }}</h2></br>

                    <a href="{{route('product.index')}}" class="btn btn-primary">Add Product </a></br>
                    <table class="table table-hover" border="2"></br>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Email verified</th>
                            <th>Role</th>
                        </tr>
                        @foreach($users as $data)
                        <tr>
                            <td>{{$data->name}}</td>
                            <td>{{$data->email}}</td>
                            <td>{{$data->email_verified_at}}</td>
                            <td>@if($data->role == '1') Admin @else User @endif </td>
                        </tr>
                        @endforeach
                    </table>



                    <table class="table table-hover" border="2"></br>
                        <tr>
                            <th>Name</th>
                            <th>description</th>
                           
                        </tr>
                        @foreach($product as $data)
                        <tr>
                            <td>{{$data->name}}</td>
                            <td>{{$data->discription}}</td>
                           
                        </tr>
                        @endforeach
                    </table>

                    </br>

                   

                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
