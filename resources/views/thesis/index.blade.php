@extends('main')

@section('content')
    <div class="container-content">
        <div class="row col-md-12" style="background: #ffffff;text-align: center">
            <div class="well well-lg">
                <h1 style="padding: 2%">วิทยานิพนธ์นักศึกษา</h1>
            </div>
        </div>

        <div class="some-space"></div>
        <div class="row col-md-12 col-xs-12" style="background: #ffffff">
            <h2 class="bg-success" style="margin: 1% 1% 0 1%;padding: 2%;text-align: left">ปริญญานิพนธ์นักศึกษาปริญญาตรี</h2>
            <div class="row row-card col-md-4">
            @foreach($thesis as $t)
                <div class="well-lg">
                    <h4>{{ $t->id }}.) {{ $t->name }}</h4>
                </div>
            @endforeach
            </div>
        </div>

        <div class="some-space"></div>

        <div class="row col-md-12 col-xs-12" style="background: #ffffff">
            <h2 class="bg-success" style="margin: 1% 1% 0 1%;padding: 2%;text-align: left">ปริญญานิพนธ์นักศึกษาปริญญาโท</h2>
        </div>

        <div class="row col-md-12 col-xs-12" style="background: #ffffff">
            <h2 class="bg-success" style="margin: 1% 1% 0 1%;padding: 2%;text-align: left">ปริญญานิพนธ์นักศึกษาปริญญาเอก</h2>
        </div>
    </div>
@endsection