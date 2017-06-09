@extends('main')

@section('head')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
@stop

@section('content')
    <div class="container">
        <div id="myCarousel" class="carousel slide row" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item first active" id="1">
                    <div class="carousel-caption">
                        <div class="col-md-6 col-xs-12" style="padding: 5% 10% 5% 10%">
                            <h1 class="title" style="font-size: 40px;">
                                <span>ภาควิชาคอมพิวเตอร์</span>
                            </h1>
                            <p class="desc">
                                คณะวิทยาศาสตร์ มหาวิทยาลัยศิลปากร
                            </p>
                            <br>
                            <ul class="list" style="text-align: left">
                                <li class="welcome-li">
                                    <a href="{{ url('interested') }}">ผู้สนใจเข้าศึกษา</a>
                                </li>
                                <li class="welcome-li">
                                    <a href="{{ url('current-student') }}">นักศึกษาปัจจุบัน</a>
                                </li>
                                <li class="welcome-li">
                                    <a href="">บุคลากร</a>
                                </li>
                                <li class="welcome-li">
                                    <a href="">รู้จักภาควิชา</a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-md-6 col-xs-12" style="padding: 2% 10% 10% 10%">
                            <div class="pc-wrapper">
                                <img class="pc img-responsive" src="{{ URL::asset('image/SC-SU-Formal-TH.png') }}" style="width: 100%" width="90%" height="90%">
                                <div class="price">
                                    {{--This is price--}}
                                </div>
                            </div>
                            {{--<img class="keyboard" src="{{ URL::asset('image/white-atom.png') }}" alt="" width="100px" height="100px">
                            <a type="button" href="{{ url('contact') }}" class="btn btn-warning btn-lg">
                                ติดต่อ
                            </a>--}}
                        </div>
                    </div>
                </div>

                <div class="item second" id="2">
                    <div class="carousel-caption">
                        <div class="row">
                            <h2 class="title">
                                <span>ภาควิชาคอมพิวเตอร์</span>
                            </h2>
                        </div>

                        <div class="row">
                            <div class="col-xs-4 cms-wrapper">
                                <div class="cms">
                                    <div class="front">
                                        <h1>1</h1>
                                    </div>
                                    <div class="back">
                                        <a href="" class="btn btn-primary btn-lg">
                                            <span class="glyphicon glyphicon-user"></span>
                                        </a>
                                        {{--<img class="img-responsive" src="{{ URL::asset('image/white-atom.png') }}" alt="">--}}
                                    </div>
                                </div>
                                <p class="info">
                                    one
                                </p>
                            </div>

                            <div class="col-xs-4 cms-wrapper">
                                <div class="cms">
                                    <div class="front">
                                        <h1>2</h1>
                                    </div>
                                    <div class="back">
                                        <a href="" class="btn btn-primary btn-lg">
                                            <span class="glyphicon glyphicon-user"></span>
                                        </a>
                                        {{--<img class="img-responsive" src="{{ URL::asset('image/white-atom.png') }}" alt="">--}}
                                    </div>
                                </div>
                                <p class="info">
                                    two
                                </p>
                            </div>

                            <div class="col-xs-4 cms-wrapper">
                                <div class="cms">
                                    <div class="front">
                                        <h1>3</h1>
                                    </div>
                                    <div class="back">
                                        <a href="" class="btn btn-primary btn-lg">
                                            <span class="glyphicon glyphicon-user"></span>
                                        </a>
                                        {{--<img class="img-responsive" src="{{ URL::asset('image/white-atom.png') }}" alt="">--}}
                                    </div>
                                </div>
                                <p class="info">
                                    three
                                </p>
                            </div>

                        </div>

                        <div class="source">

                        </div>
                    </div>
                </div>
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

        {{--<div class="row">
            <div class="welcome-card col-md-12 col-xs-12" style="/*border: solid #ff0000*/">
                <div class="col-md-6 col-xs-12" style="text-align: center;/*border: solid #00ff00;*/">
                    <img src="{{ URL::asset('image/white-atom.png') }}" alt="department logo">
                </div>
                <div class="jumbotron col-md-6 col-xs-12" style="color: #ffffff;text-align: right/*border: solid #00ff00*/">
                    <h1>ภาควิชาคอมพิวเตอร์</h1>
                    <h2>คณะวิทยาศาสตร์</h2>
                    <h3>มหาวิทยาลัยศิลปากร</h3>
                    <br>
                    <a href="{{ url('contact') }}" class="btn btn-warning btn-lg">
                        ติดต่อ
                    </a>
                </div>
            </div>
        </div>--}}

        <div id="featured-news" class="row col-md-12 col-xs-12" style="background: #ffffff">
            <h2 class="bg-success" style="margin: 1% 1% 0 1%;padding: 2%;text-align: left">
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
            <h2 class="bg-success" style="margin: 1% 1% 0 1%;padding: 2%;text-align: left">ผลงานวิจัย</h2>
            @foreach($researches as $research)
                @include('research._card', $research)
            @endforeach
            <div class="col-md-12" style="text-align: right">
                <a href="{{ url('research') }}"><h4>ดูงานวิจัยเพิ่มเติม ></h4></a>
            </div>
        </div>

        <div class="row row-card col-md-12 col-xs-12" style="padding: 5%">
            {{--<div class="some-space col-md-12"></div>--}}
            <div class="col-md-2 col-xs-6">
                <img src="{{ URL::asset('image/FindUsOnFacebook.png') }}" alt="" class="img-responsive">
            </div>
            <div class="col-md-2 col-xs-6">
                <img src="{{ URL::asset('image/ITPE2.jpg') }}" alt="" class="img-responsive">
            </div>
            <div class="col-md-4 col-xs-12">
                <img src="{{ URL::asset('image/NLC11.png') }}" alt="" class="img-responsive">
            </div>
            <div class="col-md-2 col-xs-6">
                <img src="{{ URL::asset('image/msdn_aa.png') }}" alt="" class="img-responsive">
            </div>
            <div class="col-md-2 col-xs-6">
                <img src="{{ URL::asset('image/nsc_logo.jpg') }}" alt="" class="img-responsive">
            </div>
            {{--<div class="some-space col-md-12"></div>--}}
        </div>
    </div>
    <script>
        var $carousel = $("#myCarousel");
        var $carouselCaption = $(".carousel-caption");
        var firstTl, secondTl, counter = 0;

        $carousel.carousel({
            interval: false
        });

        function firstTimeline() {
            var tl = new TimelineLite();

            tl
                .to(".first .carousel-caption", 0.1, {opacity: 1})
                .from(".first .pc", 1, { y: -300, opacity: 0, ease: Bounce.easeOut})
                .from(".first .keyboard", 1, { y: 300, opacity: 0, ease: Bounce.easeOut}, "-=1")
                .staggerFrom(".first .list li", 0.75, {opacity: 0, cycle: {x: [-200, 200]}, ease: Power2.easeOut}, 0.15, "-=0.5")
                .from(".first .desc", 0.7, {x: 500, opacity: 0, ease: Power4.easeOut}, "-=0.5")
                .from(".first .title", 0.7, {x: -500, opacity: 0, ease: Power2.easeOut}, "-=0.7")
                .from(".first .price", 0.7, {scale: 0.01, ease: Power4.easeOut})
                .from(".first a", 0.7, { y: -700, autoAlpha: 0, ease: Bounce.easeOut}, "-=0.3");

            return tl;
        }

        function secondTimeline() {
            var tl = new TimelineLite({onComplete: allDone});

            tl
                .from(".second .title", 0.5, { y: -400, opacity: 0, ease: Sine.easeInOut})
                .staggerFrom(".second .cms-wrapper", 0.5, {scale: 0, rotation: 180, ease: Power2.easeInOut, onComplete: completeFunc}, 1.2);

            return tl;
        }

        function completeFunc() {
            var $this = $(this.target),
                $info = $this.find(".info"),
                $front = $this.find(".front"),
                $back = $this.find(".back");

            TweenLite.to($front, 0.3, {display: "none", scale: 0});
            TweenLite.to($back, 0.3, {display: "block", scale: 1, delay: 0.3});
            TweenLite.to($info, 0.3, {opacity: 1, y: 0, delay: 0.3});
        }

        function allDone() {
            TweenLite.to(".second .source", 0.3, {autoAlpha: 1, delay: 1});
        }

        $(window).on("load", function() {
            firstTl = firstTimeline();
        });

        $carousel.on("slid.bs.carousel", function (e) {
            TweenLite.to($carouselCaption, 0.1, {opacity: 1});
            var slideId = e.relatedTarget.id;
            if(slideId === "1") {
                firstTl.restart();
                secondTl.pause();
            } else if(slideId === "2") {
                if(counter === 0) {
                    secondTl = secondTimeline();
                } else {
                    TweenLite.set([".second .front", ".second .back", ".second .info", ".second .source"], {clearProps:"all"});
                    secondTl.restart();
                }
                counter++;
            }
        });

        $carousel.on("slide.bs.carousel", function() {
            TweenLite.to($carouselCaption, 0.1, {opacity: 0});
        });

        $(document).keyup(function(e) {
            // right arrow
            if(e.which === 39) {
                $carousel.carousel("next");
                // left arrow
            } else if(e.which === 37) {
                $carousel.carousel("prev");
            }
        });
    </script>
@stop

@section('script')
    <script src="{{ URL::asset('js/fb.js') }}"></script>
@stop