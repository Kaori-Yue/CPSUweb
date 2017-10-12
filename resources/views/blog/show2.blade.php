@extends('main2')

@section('meta')
    <meta property="og:title"  content="{{$blog->title}}" />
    <meta property="og:type" content="article">
    <meta property="og:description" content="รอขิงทำนะ">
    <meta property="og:locale" content="th_TH">
    <meta property="og:image" content="{{ url('image/show/'.$blog->cover) }}">
    <meta property="og:url" content="{{ 'http://202.28.72.71/blog/'.$blog->slug }}">

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="{{ $blog->title }}" />
    <meta name="twitter:description" content="Department of Computing Silpakorn University" />
    <meta name="twitter:image" content="{{ url('image/show/'.$blog->cover) }}" />
@endsection

@section('content')
    <div class="form-read-news">
        <div class="header-form-read-news">
            <div class="container">
                <ul class="logos-share-card-news">
                    <li class="logo-share-card-news" id="shareToFB{{$blog->id}}">
                        <img src="{{ URL::asset('image/facebook_white.png') }}" />
                        <p class="description-logo-share-card-news">Share Facebook</p>
                    </li>
                    <li class="logo-share-card-news" id="shareToTW{{$blog->id}}">
                        <img src="{{ URL::asset('image/twitter_white.png') }}" />
                        <p class="description-logo-share-card-news">Share Twitter</p>
                    </li>
                </ul>
                <p class="category-header-form-read-news">ข่าวสาร / การแข่งขัน</p>
                <h1 class="title">{{$blog->title}}</h1>
                <p class="create-by-form-read-news">
                    โดย : {{$blog->user->name}}
                    <span class="time-create-form-read-news">{{$blog->publish_at}}</span>
                </p>
            </div>
        </div>

        <div class="content-form-read-news">
            <div class="container">
                <div class="zone-read-content-form-read-news">
                    <img class="image-first-news" src="{{url('image/show/'.$blog->cover) }}}}">
                    <div class="zone-content-form-read-news">
                        {!! $blog->content !!}
                    </div>
                </div>
                <h1 class="title">ข่าวที่เกี่ยวข้อง</h1>
                <ul class="wrapper-card-news">
                    @foreach($relateBlogs as $blog)
                    <li>
                            @include('blog._card3', $blog)
                    </li>
                    @endforeach

                </ul>

            </div>
        </div>
    </div>
@endsection

@section('script')

    <script>
        document.getElementById('shareToFB').onclick = function() {
            FB.ui({
                method: 'share',
                display: 'popup',
                href: '{{ 'http://202.28.72.71/blog/'.$blog->slug }}',
            }, function(response){});
        };

        document.getElementById('shareToTW').onclick = function() {
            var url = "{{ 'http://202.28.72.71/blog/'.$blog->slug }}";
            var text = "{{ $blog->title }}";
            window.open('http://twitter.com/share?url=' + encodeURIComponent(url) + '&text=' + encodeURIComponent(text), '', 'left=0,top=0,width=550,height=450,personalbar=0,toolbar=0,scrollbars=0,resizable=0');
        };
    </script>
@endsection