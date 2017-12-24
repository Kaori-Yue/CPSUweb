<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ URL::asset('image/favicon.ico') }}">
    <link rel="stylesheet" href="{{ URL::asset('js/bower_components/OwlCarousel2-2.2.1/dist/assets/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('js/bower_components/OwlCarousel2-2.2.1/dist/assets/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome-4.7.0/css/font-awesome.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/new_theme/style.css') }}" />


    @yield('meta')
</head>
<body>
<nav class="navbar-top">
    <div class="container">
        <h1 class="brand-navbar-top"><a href="{{ url('') }}">ภาควิชาคอมพิวเตอร์ มศก.</a></h1>

        <div class="wrapper-manu-navbar-top">
            <a class="menu-navbar-top" href="{{ url('news') }}">
                ข่าวสาร
            </a>
            <a class="menu-navbar-top" href="{{ url('curricula') }}">
                หลักสูตร
            </a>

            <a class="menu-navbar-top" href="{{ url('person') }}">
                บุคลากร
            </a>

            <a class="menu-navbar-top" href="{{ url('document') }}">
                เอกสาร
            </a>

            <div class="menu-navbar-top" onclick="clickDescripttionMajor()">
                เกี่ยวกับภาควิชา
                <ul class="drop-down-menu" id="descriptionMenu">
                    <li class="list-menu-drop-down"><a href="{{ url('history') }}">ประวัติภาควิชา</a></li>
                    <li class="list-menu-drop-down"><a href="{{ url('contact') }}">ติดต่อภาควิชา</a></li>
                    <li class="list-menu-drop-down"><a href="{{ url('sitemap') }}">แผนผังเว็บไซต์</a></li>
                </ul>
            </div>


        </div>
        <button class="btn-hamberger" onclick="clickBtnMenu()"><i class="fa fa-bars" aria-hidden="true"></i></button>
        <ul class="wrapper-list-nav-mobile" id="menuMobile">
            <li class="list-nav-mobile">
                <a href="{{ url('news') }}">
                    ข่าวสาร
                </a>
            </li>
            <li class="list-nav-mobile">
                <a href="{{ url('curricula') }}">
                    หลักสูตร
                </a>
            </li>
            <li class="list-nav-mobile">
                <a href="{{ url('person') }}">
                    บุคลากร
                </a>
            </li>
            <li class="list-nav-mobile">
                <a href="{{ url('document') }}">
                    เอกสาร
                </a>
            </li>
            <li class="list-nav-mobile">
                เกี่ยวกับภาควิชา
                <ul class="sub-wrapper-mobile">
                    <li class="list-sub-wrapper-mobile">
                        <a href="{{ url('history') }}">ประวัติภาควิชา</a>
                    </li>
                    <li class="list-sub-wrapper-mobile"><a href="{{ url('contact') }}">ติดต่อภาควิชา</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
@yield('content')

<nav class="navbar-bottom">
    <div class="container">
        <ul class="row-menu-navbar-bottom">
            <li class="col-menu-navbar-bottom">
                <h2 class="brand-navbar-bottom">ภาควิชาคอมพิวเตอร์ คณะวิทยาศาสตร์ <br>มหาวิทยาลัยศิลปากร</h2>
                <p class="follow-us">ติดตามภาควิชา</p>
                <ul class="menu-social">
                    <li class="logo-social">
                        <a href="https://www.facebook.com/cpsilpakorn/" target="_blank">
                            <img src="{{URL::asset('image/Facebook_Color.svg')}}"/>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="col-menu-navbar-bottom">
                <h3 class="title-navbar-bottom">หลักสูตร</h3>
                <ul class="menu-title-navbar-bottom">
                    <li>
                        <a href="{{url("curricula/bachelor")}}">ปริญญาตรี</a>
                    </li>
                    <li>
                        <a href="{{url("curricula/master")}}">ปริญญาโท</a>
                    </li>
                    <li>
                        <a href="{{url("curricula/doctor")}}">ปริญญาเอก</a>
                    </li>
                </ul>
            </li>
            <li class="col-menu-navbar-bottom">
                <h3 class="title-navbar-bottom">บุคลากร</h3>
                <ul class="menu-title-navbar-bottom">
                    <li>
                        <a href="{{ url('teacher') }}">สายวิชาการ</a>
                    </li>
                    <li>
                        <a href="{{ url('staff') }}">สายสนับสนุนวิชาการ</a>
                    </li>

                </ul>
            </li>
            <li class="col-menu-navbar-bottom">
                <h3 class="title-navbar-bottom">เกี่ยวกับภาควิชา</h3>
                <ul class="menu-title-navbar-bottom">
                    <li>
                        <a href="{{ url('history') }}">ประวัติภาควิชา</a>
                    </li>
                    <li>
                        <a href="{{ url('contact') }}">ติดต่อภาควิชา</a>
                    </li>

                </ul>
            </li>
        </ul>

    </div>
    <p class="copyright">© 2017 by Department of Computing, Faculty of Science, Silpakorn University.</p>
</nav>
<button onclick="topFunction()" id="goTopBtn" title="Go to top" class="btn-go-top">
    <img src="{{ URL::asset('image/arrow-up.svg') }}"/>
</button>

<script src="{{ URL::asset('js/bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ URL::asset('js/bower_components/OwlCarousel2-2.2.1/dist/owl.carousel.min.js') }}"></script>
<script src="{{URL::asset('js/slide.js')}}"></script>
<script src="{{URL::asset('js/fb.js')}}"></script>
<script>
    var isDescriptionMajor = false;

    function clickDescripttionMajor() {

        if(isDescriptionMajor){
            var menu = document.getElementById("descriptionMenu");
            menu.style.display = 'none';
        }else{
            var menu = document.getElementById("descriptionMenu");
            menu.style.display = 'block';
        }
        isDescriptionMajor = !isDescriptionMajor;
    }

    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 800 || document.documentElement.scrollTop > 800) {
            document.getElementById("goTopBtn").style.display = "block";
        } else {
            document.getElementById("goTopBtn").style.display = "none";
        }
    }




    
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }

    $('.owl-carousel-announcement-home-page').owlCarousel({
        loop: true,
        items: 1,
        nav: true,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true,
        dots: true,
        navText: ["<img src='{{ URL::asset('image/chevron-left.svg') }}'>","<img src='{{ URL::asset('image/chevron-right.svg') }}'>"]

    })
    $('.owl-carousel-news-home').owlCarousel({
        loop:true,


        responsive: {
            0:{
                items:1,

            },
            768:{
                items:2,

            },
            980:{
                items:2,
            }
        }
    })

    $('.owl-carousel-teachers').owlCarousel({
        loop:true,
        responsive: {
            0:{
                items:2,

            },
            768:{
                items:3,

            },
            980:{
                items:5,
            }
        }
    })
    var slider_teacher = $('#teachers');

    $('#btn-next-teacher').click(function () {
        slider_teacher.trigger('next.owl.carousel');
    });
    $('#btn-prve-teacher').click(function (){slider_teacher.trigger('prev.owl.carousel');
    });


    $('.owl-carousel-staff').owlCarousel({
        loop:true,
        responsive: {
            0:{
                items:2,

            },
            768:{
                items:3,

            },
            980:{
                items:5,
            }
        }
    })

    var slider_staff = $('#staff');

    $('#btn-next-staff').click(function () {
        slider_staff.trigger('next.owl.carousel');
    });
    $('#btn-prve-staff').click(function () {
        slider_staff.trigger('prev.owl.carousel');
    });



    var slider_news = $('#news');

    $('#btn-next-news').click(function () {
        slider_news.trigger('next.owl.carousel');
    });
    $('#btn-prve-news').click(function () {
        slider_news.trigger('prev.owl.carousel');
    });


    $('.owl-carousel-read-news-bookmark').owlCarousel({
        loop:true,
        responsive: {
            0:{
                items:2,

            },
            768:{
                items:3,

            },
            980:{
                items:3,
            }
        }
    })
    var slider_read_news_bookmark = $('#news_bookmark');

    $('#btn-next-read_news_bookmark').click(function () {
        slider_read_news_bookmark.trigger('next.owl.carousel');
    });
    $('#btn-prve-read_news_bookmark').click(function () {
        slider_read_news_bookmark.trigger('prev.owl.carousel');
    });

</script>

</body>
</html>