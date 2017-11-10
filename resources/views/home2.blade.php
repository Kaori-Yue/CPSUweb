@extends('main2')

@section('title', "หน้าหลัก")

@section('content')
    <div class="slideshow-container">
        @foreach($announce->blogs as $blog)
        <div class="mySlides fade">
            @if(count($blog) != 0)
            <a href="{{url('blog/'.$blog->slug)}}" >
                <img src="{{ url('image/show/'.$blog->cover) }}" />
            </a>
            @endif
            <!--<div class="text">Caption Text</div>-->
        </div>
        @endforeach
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
        <div class="zone-dot">
            <p></p>
            @foreach($announce->blogs as $blog)
                <span class="dot" onclick="currentSlide({{$loop->iteration}})"></span>
            @endforeach
        </div>
    </div>
    <div class="container">
    <h1 class="title">ข่าวล่าสุด
        <a href="{{url('blog')}}" class="more-detail-title">ดูข่าวเพิ่มเติม</a>
    </h1>
    <ul class="wrapper-card-news">
        @foreach($blogs as $blog)
        <li>
            @include('blog._card2', $blog)
        </li>
        @endforeach
    </ul>

    <h1 class="title">หลักสูตร
        <a href="{{url('curricula')}}" class="more-detail-title">ดูหลักสูตรเพิ่มเติม</a>
    </h1>

    <ul class="wrapper-card-course">
        @foreach($curriculas as $curricula)
            <li>
                @include('curricula._card2', $curricula)
            </li>

        @endforeach
    </ul>
    </div>
@endsection