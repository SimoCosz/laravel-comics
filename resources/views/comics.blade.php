@extends('partials.standard')

@section('mainContent')
<main class="main">
  <div class="container comics-container">
    @foreach($comics as $value)
      <div class="card">
        <div class="comic-card">
          <a href="">
            <figure>
              <img src="{{$value['thumb']}}" alt="">
            </figure>
            <h3>{{$value['title']}}</h3>
          </a>
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