@extends('main2')

@section('title', $title)

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
            <li class="list-nav"><a href="{{url("document")}}">เอกสาร</a></li>
            <li class="list-nav">
                <img src="{{ URL::asset('image/chevron-right-green.svg') }}" class="image-chevron-right-list-nav">
            </li>
            <li class="list-nav">{{$title}}</li>
        </ul>
        <div class="wrapper-header-title">
            <h1 class="header-title">{{$title}}</h1>
            <div class="line-header-title"></div>
        </div>
        <ul class="wrapper-cand-all">
            @foreach($documents as $document)
                <li class="list-wrapper-card-all">
                    @include('document._card2')
                </li>
            @endforeach
        </ul>
    </div>
@endsection