@extends('layouts.app')

@section('title', 'EX - Movies - Home')

@section('content')
    <div class="container py-3">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5">
              @foreach ($movies as $movie)
                <div class="col">
                    <x-movie-card/>   
                </div>
            @endforeach
        </div>
    </div>
@endsection