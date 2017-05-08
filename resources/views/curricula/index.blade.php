@extends('main')

@section('content')
    <div class="container">
        <div class="row col-md-12" style="background: #ffffff; text-align: center">
            <div class="well well-lg">
                <h1 style="padding: 1%">หลักสูตรปัจจุบัน</h1>
            </div>
        </div>

        <div class="row col-md-12" style="background: #ffffff">
            <div style="text-align: left">
                <h2 class="bg-primary" style="padding: 1%;margin: 1% 1% 0 1%">ระดับปริญญาตรี</h2>
            </div>
            @foreach($b_curriculas as $curricula)
                @include('curricula._card', $curricula)
            @endforeach
        </div>

        <div class="row col-md-12" style="background: #ffffff">
            <div style="text-align: left">
                <h2 class="bg-primary" style="padding: 1%;margin: 1% 1% 0 1%">ระดับปริญญาโท</h2>
            </div>
            @foreach($m_curriculas as $curricula)
                @include('curricula._card', $curricula)
            @endforeach
        </div>

        <div class="row col-md-12" style="background: #ffffff">
            <div style="text-align: left">
                <h2 class="bg-primary" style="padding: 1%;margin: 1% 1% 0 1%">ระดับปริญญาเอก</h2>
            </div>
            @foreach($d_curriculas as $curricula)
                @include('curricula._card', $curricula)
            @endforeach
        </div>

    </div>
@stop