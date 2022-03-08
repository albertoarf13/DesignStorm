<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/compiledSass.css">
    <script async="" defer="" src="https://buttons.github.io/buttons.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  </head>
  <body>
    <header>
        <div class="container_own"><a class="logo" href="/">Design Storm</a>
        <nav>
          
          @guest
            <a href="/register">register</a>
            <a href="/login">login</a>
          @else
            <a href="/account">{{ $user->name }}</a>
            <a onClick="document.getElementById('logoutForm').submit();">Log out</a>
          @endguest

          <form action="{{ route('logout') }}" method="POST" style="display:none;" id="logoutForm">
            @csrf
          </form>

        </nav>
        </div>
    </header>
    @yield('content')
  </body>
</html>