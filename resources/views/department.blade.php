@extends('main2')

@section('title', "เกี่ยวกับภาควิชา")

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
            <li class="list-nav">เกี่ยวกับภาควิชา</li>

        </ul>
        <div class="wrapper-header-title">
            <h1 class="header-title ">เกี่ยวกับภาควิชาคอมพิวเตอร์</h1>
            <div class="line-header-title"></div>
        </div>

        <ul class="wrapper-cand-all">
            <li class="list-wrapper-card-all">
                <a href="{{ url('history') }}">
                    <div class="card-type-person">
                        <img src="{{ URL::asset('image/interface.svg') }}" class="image-card-type-person">
                        <h3 class="name-card-type-person">ประวัติภาควิชา</h3>
                    </div>
                </a>
            </li>
            <li class="list-wrapper-card-all">
                <a href="{{ url('contact') }}">
                    <div class="card-type-person">
                        <img src="{{ URL::asset('image/map.svg') }}" class="image-card-type-person">
                        <h3 class="name-card-type-person">ติดต่อภาควิชา</h3>
                    </div>
                </a>
            </li>
            <li class="list-wrapper-card-all">
                <a href="{{ url('sitemap') }}">
                    <div class="card-type-person">
                        <img src="{{ URL::asset('image/hierarchical-structure.svg') }}" class="image-card-type-person">
                        <h3 class="name-card-type-person">แผนผังเว็บไซต์</h3>
                    </div>
                </a>
            </li>
        </ul>

    </div>
@endsection