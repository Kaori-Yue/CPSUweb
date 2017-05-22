@extends('main')

@section('content')
    <div class="container">
        <div class="row col-md-12 col-xs-12" style="background: #ffffff">
            <h2 class="bg-success" style="margin: 1% 1% 0 1%;padding: 2%;text-align: left">ผู้สนใจเข้าศึกษา</h2>
            <div class="col-md-4" style="padding: 3% 1% 3% 1%">
                <img class="img-thumbnail img-responsive" src="{{ URL::asset('image/silpakorn70yr.png') }}" alt="" style="height: 300px;border: none">
            </div>
            <div class="col-md-4" style="padding: 3% 1% 3% 1%">
                <img class="img-thumbnail img-responsive" src="{{ URL::asset('image/silpakorn70yr.png') }}" alt="" style="height: 300px;border: none">
            </div>
            <div class="col-md-4" style="padding: 3% 1% 3% 1%">
                <img class="img-thumbnail img-responsive" src="{{ URL::asset('image/silpakorn70yr.png') }}" alt="" style="height: 300px;border: none">
            </div>
        </div>
    </div>
@stop