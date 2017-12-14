@extends('main2')

@section('title', "บุคลากร")

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
            <li class="list-nav">บุคลากร</li>

        </ul>
        <div class="wrapper-header-title">
            <h1 class="header-title">บุคลากร</h1>
            <div class="line-header-title"></div>

        </div>
        <ul class="wrapper-card-type-person">
            <li class="list-card-type-person">
                <a href="{{ url('teacher') }}">
                    <div class="card-type-person">
                        <img src="{{ URL::asset('image/002-idea.svg') }}" class="image-card-type-person">
                        <h3 class="name-card-type-person">สายวิชาการ</h3>
                    </div>
                </a>

            </li>
            <li class="list-card-type-person">
                <a href="{{ url('staff') }}">
                    <div class="card-type-person">
                        <img src="{{ URL::asset('image/001-teamwork-2.svg') }}" class="image-card-type-person">
                        <h3 class="name-card-type-person">สายสนับสนุนวิชาการ</h3>
                    </div>
                </a>

            </li>
        </ul>
    </div>
@endsection