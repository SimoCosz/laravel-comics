@php
  $links = [
      [
        'text' => 'Characters',
        'href' => '#'
      ],
      [
        'text' => 'Comics',
        'href' => '#'
      ],
      [
        'text' => 'Movies',
        'href' => '#'
      ],
      [
        'text' => 'Tv',
        'href' => '#'
      ],
      [
        'text' => 'Games',
        'href' => '#'
      ],
      [
        'text' => 'Collectibles',
        'href' => '#'
      ],
      [
        'text' => 'Videos',
        'href' => '#'
      ],
      [
        'text' => 'Fans',
        'href' => '#'
      ],
      [
        'text' => 'News',
        'href' => '#'
      ],
      [
        'text' => 'Shop',
        'href' => '#'
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
          <a href="{{$value['href']}}">{{$value['text']}}</a>
        </li>
      @endforeach
    </ul>
  </nav>
</div>