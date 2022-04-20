@extends('partials.standard')

@section('mainContent')
<div class="poster-top">
  <figure class="container">
    <img src="{{$comic['thumb']}}" alt="">
  </figure>
</div>
<div class="container comic__container">
  <section class="comic-description">
    <h1 class="comic__title">{{$comic['title']}}</h1>
    <div class="comic__availability">
      <div class="comic__price">
        U.S. Price <span>{{$comic['price']}}</span>
      </div>
      <div class="comic__status">available</div>
      <select class="check" name="" id="" placeholder='Check Availability'>
        <option value="">Check Availability</option>
        <option value=""></option>
        <option value=""></option>
      </select>
    </div>
    <p class="comic__text">{{$comic['description']}}</p>
  </section>

  <div class="advertisement">
    advertisement
    <figure>
      <img src="{{asset('img/adv.jpg')}}" alt="">
    </figure>
  </div>
</div>

<div class="info-comic">
  <div class="container">
    <div class="talent-specs">
      <div class="talent">
        <h2 class="info__title">Talent</h2>
        <div class="telente__info">
          <h4>Art by:</h4>
          <div class="talent__name">
            @foreach($comic['artists'] as $value)
              <a href="">{{$value}},</a>
            @endforeach
          </div>
        </div>
        <div class="telente__info">
          <h4>Written by:</h4>
          <div class="talent__name">
            @foreach($comic['writers'] as $value)
              <a href="">{{$value}}</a>
            @endforeach
          </div>
        </div>
      </div>
      
      <div class="specs">
        <h2 class="info__title">Specs</h2>
        <div class="specs__info">
          <h4>Series by:</h4>
          <div class="specs__type">
              <a href="">{{$comic['series']}}</a>
          </div>
        </div>
        <div class="specs__info">
          <h4>U.S. Price:</h4>
          <div class="">
              <a href="">{{$comic['price']}}</a>
          </div>
        </div>
        <div class="specs__info">
          <h4>On Sale Date:</h4>
          <div class="">
              <a href="">{{$comic['sale_date']}}</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="banner">
    <div class="container banner-container">
      <ul>
          <li class="banner-comic">
            <a href="">Digital Comics</a>
            <div class="image">
              <img class="main-icon digital" src="{{asset('img/cta-icons.png')}}" alt="">
            </div>
          </li>
          <li class="banner-comic">
            <a href="">Shop Dc</a>
            <div class="image">
              <img class="main-icon shop" src="{{asset('img/cta-icons.png')}}" alt="">
            </div>
          </li>
          <li class="banner-comic">
            <a href="">comic shop locator</a>
            <div class="image">
              <img class="main-icon locator" src="{{asset('img/cta-icons.png')}}" alt="">
            </div>
          </li>
          <li class="banner-comic">
            <a href="">subsription</a>
            <div class="image">
              <img class="main-icon subscrition" src="{{asset('img/cta-icons.png')}}" alt="">
            </div>
          </li>
        </ul>
    </div>
  </div>
</div>
@endsection

