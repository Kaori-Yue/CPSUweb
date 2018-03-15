@extends('main2')

@section('title', $blog->title)

@section('meta')
    <meta property="og:title"  content="{{$blog->title}}" />
    <meta property="og:type" content="article">
    <meta property="og:description" content="{{$blog->description}}">
    <meta property="og:image" content="{{ url('image/show/'.$blog->cover) }}">
    <meta property="og:url" content="{{ url('news/'.$blog->slug) }}">



    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="{{ $blog->title }}" />
    <meta name="twitter:description" content="{{$blog->description}}" />
    <meta name="twitter:image" content="{{ url('image/show/'.$blog->cover) }}" />
@endsection

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

        <li class="list-nav"><a href={{url("news")}}>ข่าวสาร</a></li>
        <li class="list-nav">
            <img src="{{ URL::asset('image/chevron-right-green.svg') }}" class="image-chevron-right-list-nav">
        </li>
        <li class="list-nav">{{$blog->title}}</li>

    </ul>

    <ul class="wrapper-read-news">
        <li class="list-wrapper-read-news">
            <div class="wrapper-header-title">
                <h1 class="header-title">{{$blog->title}}</h1>
            </div>
            <div class="wrapper-time-create-card-news-vertical">
                <img class="image-calendar-card-news-vertical" src="{{ URL::asset('image/calendar.svg') }}" />
                <p class="time-create-card-news-vertical">{{$blog->publish_at}}</p>
            </div>
            <img src="{{ url('image/show/'.$blog->cover) }}" class="image-read-news">
            <ul class="wrapper-btn-share">

                <li class="list-btn-share">
                    <img src="{{ URL::asset('image/Facebook_Color.svg') }}" id="shareToFB{{$blog->id}}"/>

                </li>
                <li class="list-btn-share">
                    <img src="{{ URL::asset('image/Twitter_Color.svg') }}" id="shareToTW{{$blog->id}}"/>

                </li>

            </ul>
            <div class="description-read-news">{!!  $blog->content  !!}</div>

        </li>
        <li class="list-wrapper-read-news">
            <div class="wrapper-header-title">
                <h1 class="header-title">ข่าวที่เกี่ยวข้อง</h1>
                <div class="line-header-title"></div>
            </div>
            <ul class="wrapper-card-news">
                @foreach($relateBlogs as $blog_r)
                    @include('blog._card4', $blog_r)
                @endforeach
            </ul>
        </li>
    </ul>
</div>
    <script>
        document.getElementById('shareToFB{{$blog->id}}').onclick = function() {
            FB.ui({
                method: 'share',
                display: 'popup',
                href: '{{ url('news/'.$blog->slug) }}'
            }, function(response){});
        };

        document.getElementById('shareToTW{{$blog->id}}').onclick = function() {
            var url = "{{ url('news/'.$blog->slug) }}";
            var text = "{{ $blog->title }}";
            window.open('http://twitter.com/share?url=' + encodeURIComponent(url) + '&text=' + encodeURIComponent(text), '', 'left=0,top=0,width=550,height=450,personalbar=0,toolbar=0,scrollbars=0,resizable=0');
        };
    </script>
@endsection

