@extends('master')
@section('content')
<div class="container">
    <h1 class="text-center">Cart Items</h1>

    <div class="row">
        @foreach ($products as $product)
                <div class="col-sm-12 col-lg-4" >
                    <a  href="/details/{{ $product->id }}">
                            <img class="search-img img-fluid img-thumbnail" src="{{ $product->gallery }}" alt="">
                            <h5>{{ $product->name }}</h5>
                            
                    </a>
                    
                    <a href="/remove-from-cart/{{ $product->carts_id }}" class="btn btn-warning">Remove From Cart</a>
                    
                </div>
            
        
        @endforeach
    </div>
</div>
@endsection