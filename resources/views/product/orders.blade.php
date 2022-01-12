@extends('master')
@section('content')
<div class="container">
    <h1 class="text-center">Ordered Items</h1>
    @if($orders->isEmpty())
        <h4 class="text-center text-danger">You have no ordered items</h4>
    @else
        <hr>
        <div class="row">
            @foreach ($orders as $order)
                    <div class="col-sm-12 col-lg-4" >
                        <a  href="/details/{{ $order->id }}">
                                <img class="search-img img-fluid img-thumbnail" src="{{ $order->gallery }}" alt="">
                                <h5>{{ $order->name }}</h5> 
                        </a>
                        <p>Address: {{ $order->address }}</p>  
                        <p>Delivery Status: {{ $order->status }}</p>  
                        <p>Payment Status: {{ $order->payment_status }}</p>
                        <p>Payment_method: {{ $order->payment_method }}</p>
                    </div>
            @endforeach
        </div>
        <hr>
    @endif
    
</div>
@endsection