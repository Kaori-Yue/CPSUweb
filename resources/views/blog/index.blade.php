@extends('main')

@section('content')
    <div class="container">
        @if(sizeof($features) > 0)
            <div class="row">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        @foreach($features as $blog)
                            <li data-target="#myCarousel" data-slide-to="{{ $loop->index }}" @if($loop->first) class="active" @endif></li>
                        @endforeach
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        @foreach($features as $blog)
                            <div class="item @if($loop->first) active @endif"
                                 style="background-image: url('{{ url('image/show/'.$blog->cover) }}');background-size: cover;">
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

        <div class="row col-md-12 col-xs-12" style="background: #ffffff">
            <h2 class="bg-success" style="margin: 1% 1% 0 1%;padding: 2%;text-align: left">ข่าวตามหมวดหมู่</h2>
            <div id="myCanvasContainer">
                <canvas width="680" height="300" style="padding: 3%;width: 100%" id="myCanvas">
                    <ul>
                        @foreach($tags as $tag)
                            <li><a href="{{ url('tag/'.$tag->slug) }}">{{ $tag->name }}</a></li>
                        @endforeach
                        {{--<li><a data-weight="50" href="http://www.google.com" target="_blank">Google</a></li>
                        <li><a href="">Chips</a></li>
                        <li><a href="">Salt</a></li>
                        <li><a href="">Vinegar</a></li>
                        <li><a href="">Test</a></li>
                        <li><a href="">Inpitar</a></li>
                        <li><a href="">Pakorn</a></li>
                        <li><a href="">Sapol</a></li>
                        <li><a href="">ข่าวเด่น</a></li>--}}
                    </ul>
                </canvas>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        window.onload = function() {
            TagCanvas.interval = 20;
            TagCanvas.textFont = 'Impact,Arial Black,sans-serif';
            TagCanvas.textColour = '#40826D';
            TagCanvas.textHeight = 25;
            TagCanvas.outlineColour = '#D98F4F';
            TagCanvas.outlineThickness = 5;
            TagCanvas.maxSpeed = 0.04;
            TagCanvas.minBrightness = 0.1;
            TagCanvas.depth = 0.92;
            TagCanvas.pulsateTo = 0.2;
            TagCanvas.pulsateTime = 0.75;
            TagCanvas.initial = [0.1,-0.1];
            TagCanvas.decel = 0.98;
            TagCanvas.reverse = true;
            TagCanvas.hideTags = false;
            TagCanvas.shadow = '#ccf';
            TagCanvas.shadowBlur = 3;
            TagCanvas.weight = true;
            TagCanvas.dragControl = true;
            TagCanvas.weightFrom = 'data-weight';
            TagCanvas.fadeIn = 800;
            try {
                TagCanvas.Start('myCanvas');
            } catch(e) {
                document.getElementById('myCanvasContainer').style.display = 'none';
            }
        };
    </script>
@stop