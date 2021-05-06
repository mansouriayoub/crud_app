<!DOCTYPE html>
<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel 7 CRUD App</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>
<body>
  <!-- Just an image -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="{{ asset('img/go.png') }}" width="30" height="30" alt="">
  </a>
  <div class="pull-right">
    <a class="btn btn-primary" href="{{ route('welcome') }}"> Home</a>
  </div>
</nav>
<div class="container">
    @yield('content')
</div>
   <script>
        $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
    </script>
</body>
</html>