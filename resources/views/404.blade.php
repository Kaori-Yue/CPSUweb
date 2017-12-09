@extends('main2')

@section('title', "ไม่พบหน้านี้ในระบบ")

@section('content')
    <div class="container-content">
        <p class="not-found">ขออภัยค่ะ ไม่พบหน้านี้ในระบบ</p>

        {{--<img class="img-thumbnail img-responsive" src="{{ URL::asset('image/groot.gif') }}" alt="" style="height: 300px;border: none">
        <h1><b>I am Groot !<br>(404)</b></h1>

        <hr>
        <h3>ไม่พบหน้าเว็บที่ท่านต้องการ</h3>--}}
    </div>
@stop

@section('script')
    <link href="https://fonts.googleapis.com/css?family=Baloo" rel="stylesheet">
@endsection