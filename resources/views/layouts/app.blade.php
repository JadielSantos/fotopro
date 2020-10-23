<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/icon-font.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navigation.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="{{ asset("img/icon.png") }}">
  </head>
  <body>
    <div id="app">
      @unless (Route::currentRouteName() === 'landing-page')
        @include('partials.navigation')
      @endunless

      <main class="py-4">
        @yield('content')
      </main>

      @include('partials.footer')
   </div>
  </body>
</html>
