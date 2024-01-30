<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A_blog | {{$title}}</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body>
    @include('partials.nav')
      <div class="container mt-4" >
        @yield('container')
      </div>
    <script src="{{asset('js/bootstrap.js')}}"></script>
</body>
</html>