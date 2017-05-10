@extends('main')

@section('content')
    <div class="container">
        <div class="center-cropped" style="background-image: url('{{ url('image/show/'.$blog->cover) }}')"></div>
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