@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Films</h2>
    <div class="row">
        @foreach ($moviesList as $movie)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ $movie->image }}" alt="{{ $movie->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <p class="card-text">{{ $movie->description }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
    <h2>Films</h2>
@endsection