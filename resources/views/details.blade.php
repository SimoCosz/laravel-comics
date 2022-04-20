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
@endsection

