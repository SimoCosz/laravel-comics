@extends('partials.standard')

@section('mainContent')
<main class="main">
  <div class="comics-container">
    @foreach($comics as $value)
      <div class="card">
        <div class="comic-card">
          <figure>
            <img src="{{$value['thumb']}}" alt="">
          </figure>
          <h3>{{$value['title']}}</h3>
        </div>
      </div>
        @endforeach
      </div>
      <div class="btn-wrapper">
        <button class="btn">
          Load more
        </button>
      </div>
</main>
@endsection