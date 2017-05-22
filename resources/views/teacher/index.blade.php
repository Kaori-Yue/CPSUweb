@extends('main')

@section('content')
    <div class="container">
        <div class="row col-md-12" style="background: #ffffff; text-align: center">
            <div class="well well-lg">
                <h1 style="padding: 2%">บุคลากร</h1>
            </div>
        </div>

        <div id="teacher" class="col-xs-12 some-space hidden-md"></div>

        <div class="row col-md-12" style="background: #ffffff">
            <h2 class="bg-primary" style="margin: 1% 1% 0 1%;padding: 2%;text-align: left">คณาจารย์</h2>
            @foreach($teachers as $teacher)
                @include('teacher._card', $teacher)
            @endforeach
        </div>

        <div id="staff" class="col-xs-12 some-space hidden-md"></div>

        <div class="row col-md-12" style="background: #ffffff">
            <h2 class="bg-primary" style="margin: 1% 1% 0 1%;padding: 2%;text-align: left">เจ้าหน้าที่</h2>
            {{--@foreach($teachers as $teacher)
                @include('teacher._card', $teacher)
            @endforeach--}}
        </div>
    </div>

@stop