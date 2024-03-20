@extends('layouts.app')

@section('title', 'Lista dei film')

@section('main-content')

  <section>
    <div class="container">
      <h1>Movies</h1>
      {{-- @dump($movies) --}}

        <div class="card">
          <div class="card-body">
            <h6>{{ $movie->title }}</h6>
            <h6>{{ $movie->original_title }}</h6>
            <h6>{{ $movie->nationality }}</h6>
            <h6>{{ $movie->date }}</h6>
            <h6>{{ $movie->vote }}</h6>
          </div>
        </div>
    </div>
  </section>
    
@endsection