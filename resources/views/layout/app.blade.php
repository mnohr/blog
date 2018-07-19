<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>{{config('app.name','meroapp')}}</title>


        
    </head>
    <body>
        @include('inc.navbar')
        <br>
        <div class="container">

       @yield('content')
       </div>
    </body>
</html>
