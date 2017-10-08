@extends('main2')

@section('title', "หน้าหลัก")

@section('content')
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
            @include('curricula.card2', $curricula)
        @endforeach
    </ul>
@endsection