@extends('main')

@section('content')
    <div class="container">
        <div class="row">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    @foreach($blogs as $blog)
                        <li data-target="#myCarousel" data-slide-to="{{ $loop->index }}" @if($loop->first) class="active" @endif></li>
                    @endforeach
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    @foreach($blogs as $blog)
                        <div class="item @if($loop->first) active @endif"
                             style="background-image: url('{{ url('image/show/'.$blog->cover) }}');background-size: cover;height: 500px">
                            <div class="carousel-caption">
                                <h3>{{ $blog->title }}</h3>
                                <p>By.{{ $blog->user->name_en }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h1>ข่าวสารตามหมวดหมู่</h1>
                </div>
            </div>
        </div>
        <div class="row">
        @foreach($blogs as $blog)
            @include('blog._card', $blog)
        @endforeach
        </div>
    </div>
@stop