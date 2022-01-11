@extends('master')
@section('content')
<div class="container">
    <h1 class="text-center">Search Results</h1>
    <div class="row">
        @foreach ($results as $result)
        <div class="col-sm-4" >
            <a  href="/details/{{ $result->id }}">
                
                <img class="search-img img-fluid img-thumbnail" src="{{ $result->gallery }}" alt="">
                <h5>{{ $result->name }}</h5>
                
            </a>
            
        </div>    
        @endforeach
    </div>
</div>
@endsection