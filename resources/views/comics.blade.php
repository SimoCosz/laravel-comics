@extends('partials.standard')

@section('mainContent')
<main class="main">
  <div class="container comics-container">
    @foreach($comics as $indice => $value)
      <div class="card">
        <a href="{{route('comic.show', ['id' => $indice])}}">
          <div class="comic-card">
            <figure>
              <img src="{{$value['thumb']}}" alt="">
            </figure>
            <h3>{{$value['title']}}</h3>
          </div>
        </a>
      </div>
        @endforeach
      </div>
      <div class="btn-wrapper">
        <button class="btn">
          Load more
        </button>
      </div>
    </main>
    <div class="main-banner">
      <div class="container banner-container">
        <ul>
          @foreach($links as $value)
            <li class="item-banner">
              <div class="image">
                <img src="{{$value['image']}}" alt="">
              </div>
              <a href="{{$value['href']}}">{{$value['text']}}</a>
            </li>
          @endforeach
        </ul>
      </div>
    </div>
@endsection