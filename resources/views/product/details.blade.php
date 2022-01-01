@extends('master')
@section('content')
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
            <a class="btn btn-success" href="#">Add To Cart</a>
            <hr>
            <a class="btn btn-primary" href="#">Buy Now</a>
            


        </div>
    </div>
</div>
@endsection