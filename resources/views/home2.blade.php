@extends('main2')

@section('title', "หน้าหลัก")

@section('content')
    <h1 class="title">ข่าวล่าสุด
        <a href="#" class="more-detail-title">ดูข่าวเพิ่ทเติม</a>
    </h1>
    <ul class="wrapper-card-news">
        @foreach($blogs as $blog)
            @include('blog.card2', $blog)
        @endforeach
    </ul>

    <h1 class="title">หลักสูตร
        <a href="#" class="more-detail-title">ดูหลักสูตรเพิ่มเติมเพิ่ทเติม</a>
    </h1>

    <ul class="wrapper-card-course">
        @foreach($curriculas as $curricula)
            @include('curricula.card2', $curricula)
        @endforeach
    </ul>
@endsection