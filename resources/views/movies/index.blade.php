@extends('layouts.app')

@section('title', 'Lista dei film')

@section('main-content')

  <section>
    <div class="container">
      <h1>Movies</h1>
      {{-- @dump($movies) --}}
      <div class="row">

        @forelse($movies as $movie)
          <div class="col-4">
            <div class="card">
              <div class="card-body">
                <h6>{{ $movie->title }}</h6>
              </div>
            </div>
          </div>

        @empty
        <div class="col-12">
          No books
        </div>          
        @endforelse          

      </div>
    </div>
  </section>
    
@endsection