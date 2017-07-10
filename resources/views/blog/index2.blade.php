@extends('main2')

@section('head')
    {{-- jqcloud --}}
    <script src="{{ URL::asset('js/bower_components/jqcloud2/dist/jqcloud.min.js') }}"></script>
    <link rel="stylesheet" href="{{ URL::asset('js/bower_components/jqcloud2/dist/jqcloud.min.css') }}">
    {{-- tagcanvas --}}
    <script src="{{ URL::asset('js/tagcanvas.min.js') }}" type="text/javascript"></script>
@endsection

@section('content')
    <div class="container">
        <div class="row col-md-12 col-xs-12" style="padding: 0 8px 0 8px">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    @foreach($features as $blog)
                        <li data-target="#myCarousel" data-slide-to="{{ $loop->index }}" @if($loop->first) class="active" @endif></li>
                    @endforeach
                </ol>

                <div class="carousel-inner" role="listbox">
                    @foreach($features as $blog)
                        <div class="item @if($loop->first) active @endif"
                             style="background-image: url('{{ url('image/show/'.$blog->cover) }}');">
                            <a href="{{ url('blog/'.$blog->slug) }}">
                                <div class="carousel-caption" style="">
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

        <div id="featured-news" class="col-xs-12 some-space hidden-md"></div>

        <div class="row col-md-12 col-xs-12">
            <h2 style="margin: 1% 0 0 1%;padding: 0;text-align: left">ข่าวเด่น</h2>
            @foreach($features as $blog)
                @include('blog._bcard2', $blog)
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

        <div id="latest-news" class="col-xs-12 some-space hidden-md"></div>

        <div class="row col-md-12 col-xs-12">
            <h2 style="margin: 1% 0 0 1%;padding: 0;text-align: left">ข่าวล่าสุด</h2>
            @foreach($blogs as $blog)
                @include('blog._card2', $blog)
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

        <div class="row col-md-12 col-xs-12">
            <h2 style="margin: 1% 0 0 1%;padding: 0;text-align: left">ข่าวตามหมวดหมู่</h2>
            <div class="regular-card" id="demo" style="height: 400px;margin: 8px"></div>
        </div>
    </div>
    <script type="text/javascript">
        window.onload = function() {
            var words = [
                    @foreach($tags as $tag)
                {text: "{{ $tag->name }}", weight: {!! $tag->weight !!}, link: '{{ url('tag/'.$tag->slug) }}' },
                @endforeach
            ];

            $('#demo').jQCloud(words,{
                /*colors: ["#800026", "#bd0026", "#e31a1c", "#fc4e2a", "#fd8d3c", "#feb24c", "#fed976", "#ffeda0", "#ffffcc"],*/
                autoResize: true,
                shape: "elliptic"
            });
        };
    </script>
@endsection

@section('script')
    <script src="{{ URL::asset('js/fb.js') }}"></script>
@stop