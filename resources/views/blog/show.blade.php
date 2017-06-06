@extends('main')

@section('meta')
<meta property="og:title"  content="{{ $blog->title }}" />
<meta property="og:type" content="article">
<meta property="og:description" content="Department of Computing Silpakorn University">
<meta property="og:locale" content="th_TH">
<meta property="og:image" content="{{ url('image/show/'.$blog->cover) }}">
<meta property="og:url" content="{{ 'http://202.28.72.71/CPSUweb/public/index.php/blog/'.$blog->slug }}">

<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="{{ $blog->title }}" />
<meta name="twitter:description" content="Department of Computing Silpakorn University" />
<meta name="twitter:image" content="{{ url('image/show/'.$blog->cover) }}" />
@stop

@section('content')
    <div class="container" style="font-family: 'Trirong', serif;font-size: 20px">
        <div class="row center-cropped" style="background-image: url('{{ url('image/show/'.$blog->cover) }}')"></div>
        <div class="row row-card">
            <div class="col-md-8 col-md-offset-2 col-xs-offset-0">
                <h1>{{ $blog->title }}</h1>
                <br>
                <p>แผยแพร่เมื่อ : {{ $blog->publish_at }}</p>
                <p>โดย : {{ $blog->user->name }}</p>
                <p>แท็ก :
                    @foreach($blog->tags as $tag)
                        <a href="#">{{ $tag->name }}</a>,
                    @endforeach
                </p>
                <br>
            </div>
            <hr>
            <div class="col-md-8 col-md-offset-2 col-xs-offset-0">
                {!! $blog->content !!}
            </div>
            <div class="col-md-12 some-space"></div>
        </div>
    </div>
@stop