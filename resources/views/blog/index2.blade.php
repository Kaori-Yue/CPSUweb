@extends('main2')

@section('title', "ข่าวสาร")

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
            <li class="list-nav">ข่าวสาร</li>
        </ul>

        @foreach($categories as $category)
            <div class="wrapper-header-title">
                <h1 class="header-title">{{$category->name}}</h1>
                <div class="line-header-title"></div>
            </div>
            @if(count($category->blogs) != 0)
                <ul class="wrapper-category-news">
                    @foreach($category->blogs as $blog)
                        @if($blog->status == 'publish')
                            @if($loop->iteration <= 2)
                                @include('blog._card2', $blog)
                            @endif
                        @endif
                    @endforeach
                    <li class="list-card-news-category">
                        <ul class="wrapper-card-news">
                            @foreach($category->blogs as $blog)
                                @if($blog->status == 'publish')
                                    @if($loop->iteration > 2 && $loop->iteration <= 6)
                                        @include('blog._card3', $blog)
                                    @endif
                                @endif
                            @endforeach
                                <li class="list-wrapper-card-news">
                                    <a class="watch-more-card-news" href="{{url("news/category/". $category->slug)}}">ดูข่าวทั้งหมด</a>
                                </li>
                        </ul>
                    </li>
                </ul>
            @endif
        @endforeach
    </div>
@endsection