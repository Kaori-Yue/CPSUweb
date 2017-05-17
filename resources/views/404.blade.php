@extends('main')

@section('content')
    <div class="container">
        <div class="row row-card" style="text-align: center;align-content: center;padding: 1%">
            {{--<img class="img-thumbnail img-responsive" src="{{ URL::asset('image/groot.gif') }}" alt="" style="height: 300px;border: none">
            <h1><b>I am Groot !<br>(404)</b></h1>

            <hr>
            <h3>ไม่พบหน้าเว็บที่ท่านต้องการ</h3>--}}
            <h1 style="font-size: 100px; font-family: 'Baloo', cursive">01 00</h1>
            <h1 style="font-size: 100px; font-family: 'Baloo', cursive">00 00</h1>
            <h1 style="font-size: 100px; font-family: 'Baloo', cursive">01 00</h1>
            <hr>
            <h2>Page Not Found</h2>
        </div>
        @include('_map')
    </div>
@stop