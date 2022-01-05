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
                    <form action="">
                        <input type="hidden" name="item" value="{{ $product->id }}">
                        <button class="btn btn-warning">Remove From Cart</button>
                    </form>
                </div>
            
        
        @endforeach
    </div>
</div>
@endsection