@extends('main')

@section('head')
    <link href="https://fonts.googleapis.com/css?family=Baloo" rel="stylesheet">
@stop

@section('content')
    <div class="container">

        <div class="row col-md-12" style="background: #ffffff; text-align: center">
            <div class="well well-lg">
                <h1 style="padding: 2%">Page Not Found</h1>
            </div>
            <h1 style="font-size: 100px; font-family: 'Baloo', cursive; letter-spacing: 10px">01 00</h1>
            <h1 style="font-size: 100px; font-family: 'Baloo', cursive; letter-spacing: 6px">00 00</h1>
            <h1 style="font-size: 100px; font-family: 'Baloo', cursive; letter-spacing: 10px">01 00</h1>
        </div>

        {{--<img class="img-thumbnail img-responsive" src="{{ URL::asset('image/groot.gif') }}" alt="" style="height: 300px;border: none">
        <h1><b>I am Groot !<br>(404)</b></h1>

        <hr>
        <h3>ไม่พบหน้าเว็บที่ท่านต้องการ</h3>--}}

        @include('_map')
    </div>
@stop