@extends('main2')

@section('title', "บุคลากรสายสนับสนุนวิชาการ")

@section('content')
    <div class="container-content">
        <ul class="wrapper-nav">
            <li class="list-nav">
                <a href="{{url("")}}">
                    <img src="{{ URL::asset('image/home-nav.svg') }}" class="image-home-list-nav">
                </a>
            </li>
            <li class="list-nav">
                <img src="{{ URL::asset('image/chevron-right-green.svg') }}" class="image-chevron-right-list-nav">
            </li>
            <li class="list-nav"><a href="{{url("person")}}">บุคลากร</a></li>
            <li class="list-nav">
                <img src="{{ URL::asset('image/chevron-right-green.svg') }}" class="image-chevron-right-list-nav">
            </li>
            <li class="list-nav">บุคลากรสายสนับสนุนวิชาการ</li>
        </ul>
        <div class="wrapper-header-title">
            <h1 class="header-title">บุคลากรสายสนับสนุนวิชาการ</h1>
            <div class="line-header-title"></div>
        </div>
        <ul class="wrapper-4card">
            @foreach($staffs as $staff)
                <li class="list-wrapper-4card">
                    @include('staff._card2', $staff)
                </li>
            @endforeach
        </ul>

    </div>
@endsection