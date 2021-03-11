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

                    <!-- <h2>{{ __('User Data') }}</h2></br>
                    @can('isAdmin')
                    <a href="{{route('product.index')}}" class="btn btn-success">Create New Product </a>|
                    @endcan
                    <a href="{{route('adduser.index')}}" class="btn btn-success">Create New user </a></br> -->

                    


                    <h2>{{ __('Product Data') }}</h2></br>
                 

                    </br>

                    <h2>{{ __('Role Data') }}</h2></br>
                    

                   

                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


