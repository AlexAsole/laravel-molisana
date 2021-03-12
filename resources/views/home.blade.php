<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>La Molisana - Home</title>
    <link href='https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap' rel='stylesheet'>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

  @include('partials.header')

  <div class="list">
    <h1>Le Lunghe</h1>
    <div class="long">
      @foreach ($pastaList as $key => $pasta)
        @if ($pasta['tipo'] === 'lunga')
          <a href="product/{{$key + 1}}"><img src="{{$pasta['src']}}" class="poster" alt=""></a> <br>
        @endif
      @endforeach
    </div>
    
    <h1>Le Corte</h1>
    <div class="short">
      @foreach ($pastaList as $key => $pasta)
        @if ($pasta['tipo'] === 'corta')
          <a href="product/{{$key + 1}}"><img src="{{$pasta['src']}}" class="poster" alt=""></a> <br>
        @endif
      @endforeach
    </div>
    
    <h1>Le Cortissime</h1>
    <div class="shortest">
      @foreach ($pastaList as $key => $pasta)
        @if ($pasta['tipo'] === 'cortissima')
          <a href="product/{{$key + 1}}"><img src="{{$pasta['src']}}" class="poster" alt=""></a> <br>
        @endif
      @endforeach

    </div>
    
  </div>
    

  @include('partials.footer')

  

  

</body>

</html>
