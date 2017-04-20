@extends('main')

@section('content')
    <div class="container">
        <div class="row row-card">
            <div class="well well-lg">
                <h1>ผลงานนักศึกษา</h1>
            </div>
        </div>

        <div class="some-space"></div>

        <div class="row row-card col-md-12">
            <h3>ปริญญานิพพนธ์นักศึกษาปริญญาตรี</h3>
        </div>
        <div class="row row-card col-md-12">
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