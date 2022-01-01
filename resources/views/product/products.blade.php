@extends('master')
@section('content')
@if($message = Session::get('success'))
    <div class="alert alert-success" role="alert">
        {{ $message }}
    </div>
@endif
<div class="custom-product">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        @foreach ($products as $product)
            <li data-target="#carouselExampleCaptions" data-slide-to="{{ $product->id }}" class="active"></li>
        @endforeach
        
    </ol>
    <div class="carousel-inner">
        @foreach ($products as $product)
            <div class="carousel-item {{$product['id'] == 1?'active':''}}">
                <img src="{{ $product->gallery }}" class="d-block w-100 slider_img" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>{{ $product->name }}</h5>
                    <p>{{ $product->description }}</p>
                </div>
            </div>
        @endforeach
        
        
    </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>

    <div class="trending-wrapper container">
        <h3 class="text-center">Trending Products</h3>
        <div class="row">
            @foreach ($products as $product)
                <div class="col-xs-12 col-sm-6 col-lg-3">
                    <a href="details/{{ $product->id }}"><img src="{{ $product->gallery }}" class="trend-link img-thumbnail" alt="..."></a>
                    <p class="text-center">{{ $product->name }}</p>
                </div>
            @endforeach        
        </div>
            
    </div>

</div>


@endsection