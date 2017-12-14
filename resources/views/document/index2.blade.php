@extends('main2')

@section('title', "เอกสาร")

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
        <li class="list-nav">เอกสาร</li>
    </ul>
    @foreach($categories as $category)
    <div class="wrapper-header-title">
        <h1 class="header-title">{{$category}}</h1>
        <div class="line-header-title"></div>
    </div>

    <ul class="wrapper-cand-all">
        @foreach($documents[$category] as $document)
            @if($loop->iteration <= 6)
                <li class="list-wrapper-card-all">
                    @include('document._card2')
                </li>
            @endif
        @endforeach
        <li class="last-list-wrapper-card-all">
            <a href="{{ url('document/category/'.$category) }}">ดูแบบฟอร์มเพิ่มเติม</a>
        </li>
    </ul>
    @endforeach
    
</div>
@endsection