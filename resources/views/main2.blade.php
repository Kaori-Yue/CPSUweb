<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Cache-Control" content="public">
    @yield('meta')


    {{-- bootstrap & jquery --}}
    <link rel="stylesheet" href="{{ URL::asset('js/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <script src="{{ URL::asset('js/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('js/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>


    {{-- icon --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


    <!-- Specific content -->
    @yield('head')


<!-- Main CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/main2.css') }}">


    <title>{{ config('app.name', 'CPSU') }}</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="100">
<img src="{{ URL::asset('image/black_ribbon_bottom_left.png') }}" class="black-ribbon stick-bottom stick-left"/>
<div id="page">
    <div id="page-head">
        @include('_nav')
    </div>
    <div id="page-body">
        @yield('content')
    </div>
    <div id="page-footer">
        @include('_footer')
    </div>
</div>
<!-- Scripts -->
@yield('script')
</body>
</html>