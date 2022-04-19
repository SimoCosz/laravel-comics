@php
  $footerMenu = [
        [
          'title' => 'DC comics',
          'links' => [
            [
              'text' => 'Character',
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
              'text' => 'TV',
              'href' => '#'
            ],
            [
              'text' => 'Games',
              'href' => '#'
            ],
            [
              'text' => 'Videos',
              'href' => '#'
            ],
            [
              'text' => 'News',
              'href' => '#'
            ],
          ],
        ],

        [
          'title' => 'Shop',
          'links' => [
            [
            'text' => 'Shop DC',
            'href' => '#'
            ],
            [
            'text' => 'Shop DC Collectibles',
            'href' => '#'
            ],
          ],
        ],

        [
          'title' => 'DC',
          'links' => [
            [
            'text' => 'Terms Of Use',
            'href' => '#'
            ],
            [
              'text' => 'Privacy policy (New)',
              'href' => '#'
            ],
            [
              'text' => 'Ad Choices',
              'href' => '#'
            ],
            [
              'text' => 'Advertising',
              'href' => '#'
            ],
            [
              'text' => 'Jobs',
              'href' => '#'
            ],
            [
              'text' => 'Subscriptions',
              'href' => '#'
            ],
            [
              'text' => 'Talent Workshops',
              'href' => '#'
            ],
            [
              'text' => 'CPSC Certificates',
              'href' => '#'
            ],
            [
              'text' => 'Ratings',
              'href' => '#'
            ],
            [
              'text' => 'Shop Help',
              'href' => '#'
            ],
            [
              'text' => 'Contact Us',
              'href' => '#'
            ],
          ],
        ],

        [
          'title' => 'Sites',
          'links' => [
            [
              'text' => 'DC',
              'href' => '#'
            ],
            [
              'text' => 'MAD Magazine',
              'href' => '#'
            ],
            [
              'text' => 'DC Kids',
              'href' => '#'
            ],
            [
              'text' => 'DC Universe',
              'href' => '#'
            ],
            [
              'text' => 'DC Power Visa',
              'href' => '#'
            ],
          ],
        ]
      ];

  $socialIcon = [
        [
          'icon' => 'img/footer-facebook.png'
        ],
        [
          'icon' => 'img/footer-twitter.png'
        ],
        [
          'icon' => 'img/footer-youtube.png'
        ],
        [
          'icon' => 'img/footer-pinterest.png'
        ],
        [
          'icon' => 'img/footer-periscope.png'
        ],
      ]
@endphp

<div class="footer">
  <div class="container-footer">
    <div class="list-footer">
      <ul>
        @foreach($footerMenu as $value)
        <li class="item-wrap">
          <h4 class="title">{{$value['title']}}</h4> 
          <ul>
            @foreach($value['links'] as $link)
              <li class="item-footer"><a href=" {{$link['href']}} ">{{$link['text']}}</a></li>
            @endforeach
          </ul>
        </li>
        @endforeach
      </ul>
    </div>
    <div class="logo-wrapper">
      <img class="logo-bg" src="{{asset('img/dc-logo-bg.png')}}" alt="">
    </div>
  </div>
  
  <div class="social-banner">
    <div class="social-footer">
    <button>Sign up now</button>
    <div class="social-link-banner">
    <span>Follow US</span>
      <ul class="icon-wrap-banner">
        @foreach($socialIcon as $value)
        <li>
          <a href=""><img src="{{asset($value['icon'])}}" alt=""></a>
        </li>
        @endforeach
      </ul>
    </div>
    </div>
  </div> 
</div>