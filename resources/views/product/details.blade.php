@extends('master')
@section('content')

@if(session()->has('success'))
    <div class="alert alert-success" role="alert">
        <strong>{{ session('success') }}</strong>
    </div>
@endif

<div class="container">
    
    <div class="row product-img ">
        <div class="col-sm-12 col-md-6">
            <img class="img-pro img-fluid img-thumbnail" src="{{ $product_details->gallery }}" alt="">
        </div>
        <div class="col-sm-12 col-md-6">
            <a class="btn btn-danger" href="/">Go Back</a>
            <hr>
            <h2>{{ $product_details->name }}</h2>
            <p>Price: {{ $product_details->price }}$ </p>
            <p>Description: {{ $product_details->description }}</p>
            <p>Category: {{ $product_details->category }}</p>
            <hr>
            <form method="POST" action="/add-to-cart">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product_details->id }}">
                <button class="btn btn-success">Add to Cart</button>
            </form>
            
            <hr>
            <a class="btn btn-primary" href="#">Buy Now</a>
            


        </div>
    </div>
</div>
@endsection