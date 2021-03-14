<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a9a2b414e6.js" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap' rel='stylesheet'>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>{{$pastaList[$id - 1]['titolo']}} - La Molisana</title>
</head>
<body>
  @include('partials.header')
    <div class="product">
      <img src="{{$pastaList[$id - 1]['src-h']}}" class="type" alt="">
      <img src="{{$pastaList[$id - 1]['src-p']}}" class="pack" alt="">
      <div class="prev">
        @if (($id) == 1)
          <a href="/product/{{count($pastaList)}}">
        @else
          <a href="/product/{{$id - 1}}">
        @endif
          <i class="fas fa-chevron-left"></i>
          </a>
      </div>
      <div class="next">
        @if (($id) == count($pastaList))
          <a href="/product/1">
        @else
          <a href="/product/{{$id + 1}}">
        @endif
          <i class="fas fa-chevron-right"></i>
          </a>
      </div>
      <div class="description">
        {!!$pastaList[$id - 1]['descrizione']!!}
      </div>
    </div>
  @include('partials.footer')
</body>
</html>