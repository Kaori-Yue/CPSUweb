@extends('main')

@section('content')
    <div class="container">
        <div class="row col-md-12" style="background: #ffffff;text-align: center">
            <div class="well well-lg">
                <h1 style="padding: 2%">วิทยานิพนธ์นักศึกษา</h1>
            </div>
        </div>

        <div class="some-space"></div>

        <div class="row row-card col-md-12">
            <h3>ปริญญานิพพนธ์นักศึกษาปริญญาตรี</h3>
        </div>
        <div class="row row-card col-md-4">
        @foreach($thesis as $t)
            <div class="well-lg">
                <h4>{{ $t->id }}.) {{ $t->name }}</h4>
            </div>
        @endforeach
        </div>

        <div class="some-space"></div>

        <div class="row row-card col-md-12">
            <h3>ปริญญานิพพนธ์นักศึกษาปริญญาโท</h3>
        </div>
    </div>
@stop