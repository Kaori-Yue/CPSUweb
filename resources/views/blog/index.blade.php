@extends('main')

@section('head')
    {{-- jqcloud --}}
    <script src="{{ URL::asset('js/bower_components/jqcloud2/dist/jqcloud.min.js') }}"></script>
    <link rel="stylesheet" href="{{ URL::asset('js/bower_components/jqcloud2/dist/jqcloud.min.css') }}">
    {{-- tagcanvas --}}
    <script src="{{ URL::asset('js/tagcanvas.min.js') }}" type="text/javascript"></script>
@stop

@section('content')
    <div class="container">
        @if(sizeof($features) > 0)
            <div class="row">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">

                    <ol class="carousel-indicators">
                        @foreach($features as $blog)
                            <li data-target="#myCarousel" data-slide-to="{{ $loop->index }}" @if($loop->first) class="active" @endif></li>
                        @endforeach
                    </ol>

                    <div class="carousel-inner" role="listbox">
                        @foreach($features as $blog)
                            <div class="item @if($loop->first) active @endif"
                                 style="background-image: url('{{ url('image/show/'.$blog->cover) }}');background-size: cover;">
                                <a href="{{ url('blog/'.$blog->slug) }}">
                                    <div class="carousel-caption" style="top: 75%;background: rgba(217, 143, 79, 0.8);">
                                        <h3>{{ $blog->title }}</h3>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>

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
        @endif

        <div id="featured-news" class="col-xs-12 some-space hidden-md"></div>

        @if(sizeof($features) > 0)
            <div class="row col-md-12 col-xs-12" style="background: #ffffff">
                <h2 class="bg-success" style="margin: 1% 1% 0 1%;padding: 2%;text-align: left">ข่าวเด่น</h2>
                @foreach($features as $blog)
                    @include('blog._bcard', $blog)
                @endforeach
                <div class="col-md-12 col-xs-12" style="text-align: right">
                    <h4><a href="{{ url('blog/category/featured-news') }}">ข่าวเด่นเพิ่มเติม ></a></h4>
                </div>
                <script>
                    $(document).ready(function(){
                        $('[data-toggle="tooltip"]').tooltip();
                    });
                </script>
            </div>
        @endif

        <div id="latest-news" class="col-xs-12 some-space hidden-md"></div>

        <div class="row col-md-12 col-xs-12" style="background: #ffffff">
            <h2 class="bg-success" style="margin: 1% 1% 0 1%;padding: 2%;text-align: left">ข่าวล่าสุด</h2>
            @foreach($blogs as $blog)
                @include('blog._card', $blog)
            @endforeach
            <div class="col-md-12 col-xs-12" style="text-align: right">
                <h4><a href="{{ url('blog/category/latest-news') }}">ข่าวล่าสุดเพิ่มเติม ></a></h4>
            </div>
            <script>
                $(document).ready(function(){
                    $('[data-toggle="tooltip"]').tooltip();
                });
            </script>
        </div>


        <div id="tag-news" class="col-xs-12 some-space hidden-md"></div>

        {{--<div class="row col-md-12 col-xs-12" style="background: #ffffff">
            <h2 class="bg-success" style="margin: 1% 1% 0 1%;padding: 2%;text-align: left">ข่าวตามหมวดหมู่</h2>
            <div id="myCanvasContainer">
                <canvas width="680" height="300" style="padding: 3%;width: 100%" id="myCanvas">
                    <ul>
                        @foreach($tags as $tag)
                            <li>
                                <a data-weight="{{ $tag->weight }}" href="{{ url('tag/'.$tag->slug) }}">
                                    {{ $tag->name }}
                                </a>
                            </li>
                        @endforeach
                        <li>
                            <a data-weight="50" href="http://www.google.com" target="_blank">
                                Google
                            </a>
                        </li>
                    </ul>
                </canvas>
            </div>
        </div>--}}

        <div class="row col-md-12 col-xs-12" style="background: #ffffff">
            <h2 class="bg-success" style="margin: 1% 1% 0 1%;padding: 2%;text-align: left">ข่าวตามหมวดหมู่</h2>
            <div id="demo" style="height: 400px;"></div>
        </div>
    </div>

    <script type="text/javascript">
        window.onload = function() {
            /*TagCanvas.interval = 20;
            TagCanvas.textFont = '';
            TagCanvas.textColour = '#40826D';
            TagCanvas.textHeight = 25;
            TagCanvas.outlineColour = '#D98F4F';
            TagCanvas.outlineThickness = 5;
            TagCanvas.outlineMethod = 'colour';
            TagCanvas.minSpeed = 0;
            TagCanvas.maxSpeed = 0.01;
            TagCanvas.minBrightness = 0.1;
            TagCanvas.depth = 0.92;
            TagCanvas.pulsateTo = 0.2;
            TagCanvas.pulsateTime = 0.75;
            TagCanvas.initial = [0.1, -0.1];
            TagCanvas.decel = 0.98;
            TagCanvas.reverse = true;
            TagCanvas.hideTags = false;
            TagCanvas.shadow = '#ccf';
            TagCanvas.shadowBlur = 3;
            TagCanvas.weight = true;
            TagCanvas.weightFrom = 'data-weight';
            TagCanvas.fadeIn = 800;
            TagCanvas.wheelZoom = false;
            TagCanvas.dragControl = true;
            TagCanvas.pinchZoom = true;
            try {
                TagCanvas.Start('myCanvas');
            } catch (e) {
                document.getElementById('myCanvasContainer').style.display = 'none';
            }*/

            var words = [
                @foreach($tags as $tag)
                {text: "{{ $tag->name }}", weight: {!! $tag->weight !!}, link: '{{ url('tag/'.$tag->slug) }}' },
                @endforeach
            ];

            $('#demo').jQCloud(words,{
                colors: ["#800026", "#bd0026", "#e31a1c", "#fc4e2a", "#fd8d3c", "#feb24c", "#fed976", "#ffeda0", "#ffffcc"],
                autoResize: true,
                shape: "elliptic"
            });
        };
    </script>
@stop

@section('script')
    <script src="{{ URL::asset('js/fb.js') }}"></script>
@stop