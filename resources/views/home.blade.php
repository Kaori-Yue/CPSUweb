@extends('main')

@section('content')
    <div class="container">
        <div id="myCarousel" class="carousel slide row" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                @foreach($blogs as $blog)
                <li data-target="#myCarousel" data-slide-to="{{ $loop->index + 2 }}"></li>
                @endforeach
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">

                <div class="item first active">
                    <svg viewBox="0 0 160 160" width="160" height="160" fill="rgba(217, 143, 79, 1)">
                        <circle cx="80" cy="80" r="50" />
                        <g transform=" matrix(0.866, -0.5, 0.25, 0.433, 80, 80)">
                            <path d="M 0,70 A 65,70 0 0,0 65,0 5,5 0 0,1 75,0 75,70 0 0,1 0,70Z" fill="#FFF">
                                <animateTransform attributeName="transform" type="rotate" from="360 0 0" to="0 0 0" dur="1s" repeatCount="indefinite" />
                            </path>
                        </g>
                        <path d="M 50,0 A 50,50 0 0,0 -50,0Z" transform="matrix(0.866, -0.5, 0.5, 0.866, 80, 80)" />
                    </svg>
                    <div class="carousel-caption">
                        <h3>Department of Computing</h3>
                        <p>Silpakorn University</p>
                    </div>
                </div>

                <div class="item second">
                    <img src="{{ URL::asset('image/silpakorn70yr.png') }}" class="img-responsive" style="width:100%;height: 100%" alt="">
                </div>

                @foreach($blogs as $blog)
                    <div class="item"
                         style="background-image: url('{{ url('image/show/'.$blog->cover) }}');background-size: cover;">
                        <a href="{{ url('blog/'.$blog->slug) }}">
                            <div class="carousel-caption" style="">
                                <h3>{{ $blog->title }}</h3>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


        <div id="featured-news" class="row col-md-12 col-xs-12" style="background: #ffffff">
            <h2 class="primary-section-heading">
                ข่าวเด่น
            </h2>
            @foreach($blogs as $blog)
                @include('blog._bcard', $blog)
            @endforeach
            <div class="col-md-12 col-xs-12" style="text-align: right">
                <h4><a href="{{ url('blog') }}">ดูข่าวเพิ่มเติม ></a></h4>
            </div>
            <script>
                $(document).ready(function(){
                    $('[data-toggle="tooltip"]').tooltip();
                });
            </script>
        </div>

        <div class="row col-md-12 col-xs-12" style="background: #ffffff">
            <h2 class="primary-section-heading">ผลงานวิจัย</h2>
            @foreach($researches as $research)
                @include('research._card', $research)
            @endforeach
            <div class="col-md-12" style="text-align: right">
                <a href="{{ url('research') }}"><h4>ดูงานวิจัยเพิ่มเติม ></h4></a>
            </div>
        </div>

        <div class="row row-card col-md-12 col-xs-12" style="padding: 20px">
            {{--<div class="some-space col-md-12"></div>--}}
            <div class="col-md-2 col-sm-2 col-xs-6">
                <img src="{{ URL::asset('image/FindUsOnFacebook.gif') }}" alt="" class="img-responsive">
            </div>
            <div class="col-md-2 col-sm-2 col-xs-6">
                <img src="{{ URL::asset('image/ITPE2.gif') }}" alt="" class="img-responsive">
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <img src="{{ URL::asset('image/NLC11.gif') }}" alt="" class="img-responsive">
            </div>
            <div class="col-md-2 col-sm-2 col-xs-6">
                <img src="{{ URL::asset('image/msdn_aa.gif') }}" alt="" class="img-responsive">
            </div>
            <div class="col-md-2 col-sm-2 col-xs-6">
                <img src="{{ URL::asset('image/nsc_logo.gif') }}" alt="" class="img-responsive">
            </div>
            {{--<div class="some-space col-md-12"></div>--}}
        </div>
    </div>
@endsection

@section('script')
    <script async src="{{ URL::asset('js/fb.js') }}"></script>
@endsection