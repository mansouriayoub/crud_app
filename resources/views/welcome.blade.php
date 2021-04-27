@extends('products.layout')
 
@section('content')
<div class="container">
    
<div class="flex-center position-ref full-height">
    <div class="top-right links">
        @if (Route::has('login'))
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        @endif
    </div>

</div>
    <div class="container">
        {{-- <div class="alert alert-success">
            <a href="{{ route('products.index') }}"><span class="alert-link">Products List</span></a>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}">Modify List</a>
        </div>
        </div> --}}
        <ul class="list-group mb-2">
            <li class="list-group-item " aria-current="true">
                Products List<a type="button" class="pull-right btn btn-info" href="{{ route('products.index') }}">Modify List</a  > 
            </li>
            @foreach ($products as $product)
                <li class="list-group-item">{{ $product->name }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endsection