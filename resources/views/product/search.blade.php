@extends('master')
@section('content')
<div class="container">
    <h1 class="text-center">Search Results</h1>
    @foreach ($results as $result)
        <div class="row">
            <a  href="/details/{{ $result->id }}">
            <div class="col-sm-4" >
                <img class="search-img img-fluid img-thumbnail" src="{{ $result->gallery }}" alt="">
                <h5>{{ $result->name }}</h5>
            </div>
            </a>
        </div>
        
    @endforeach
</div>
@endsection