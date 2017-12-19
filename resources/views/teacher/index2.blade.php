@extends('main2')

@section('title', "บุคลากรสายวิชาการ")

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
        <li class="list-nav">บุคลากรสายวิชาการ</li>
    </ul>
    <div class="wrapper-header-title">
        <h1 class="header-title">บุคลากรสายวิชาการ</h1>
        <div class="line-header-title"></div>
    </div>

    <ul class="wrapper-4card">
        @foreach($teachers as $teacher)
            <li class="list-wrapper-4card">
                @include('teacher._card2', $teacher)
            </li>
        @endforeach
    </ul>
</div>
@endsection