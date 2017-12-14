@extends('main2')

@section('title', "หลักสูตรปริญญาโท")

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
            <li class="list-nav"><a href="{{url("/curricula")}}">หลักสูตร</a></li>
            <li class="list-nav">
                <img src="{{ URL::asset('image/chevron-right-green.svg') }}" class="image-chevron-right-list-nav">
            </li>
            <li class="list-nav">ปริญญาโท</li>
        </ul>
        <div class="wrapper-header-title">
            <h1 class="header-title">หลักสูตรปริญญาโท</h1>
            <div class="line-header-title"></div>

        </div>
        <ul class="wrapper-card-detail-curricula">
            @foreach($m_curriculas as $curricula)
                @include('curricula._card2', $curricula)
            @endforeach
        </ul>
    </div>
@endsection