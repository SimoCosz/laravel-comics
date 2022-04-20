@php
  $links = [
      [
        'text' => 'Characters',
        'href' => 'characters.index'
      ],
      [
        'text' => 'Comics',
        'href' => 'comics.index'
      ],
      [
        'text' => 'Movies',
        'href' => 'movies.index'
      ],
      [
        'text' => 'Tv',
        'href' => 'tv.index'
      ],
      [
        'text' => 'Games',
        'href' => 'games.index'
      ],
      [
        'text' => 'Collectibles',
        'href' => 'collectibles.index'
      ],
      [
        'text' => 'Videos',
        'href' => 'videos.index'
      ],
      [
        'text' => 'Fans',
        'href' => 'fans.index'
      ],
      [
        'text' => 'News',
        'href' => 'news.index'
      ],
      [
        'text' => 'Shop',
        'href' => 'shop.index'
      ],
    ];
@endphp

<div class="container nav-cont">
  <figure class="logo-nav">
    <img src="{{asset('img/dc-logo.png')}}" alt="">
  </figure>
  <nav class="list-nav">
    <ul>
      @foreach($links as $value)
        <li>
          <a class="{{Request::route()->getName() == $value['href']? 'active' : ''}}" href="{{route($value['href'])}}">{{$value['text']}}</a>
        </li>
      @endforeach
    </ul>
  </nav>
</div>