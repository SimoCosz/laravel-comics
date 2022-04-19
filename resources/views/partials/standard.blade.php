<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
  
  {{-- header --}}
  @include('partials.header')

  {{-- jumbo --}}
  @include('partials.jumbo')

  {{-- main --}}
  @yield('mainContent')

  {{-- footer --}}
  @include('partials.footer')

</body>
</html>