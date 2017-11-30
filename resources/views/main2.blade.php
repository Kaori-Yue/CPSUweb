<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>@yield('title')</title>
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
            <a class="menu-navbar-top" href="{{ url('blog') }}">
                ข่าวสาร
            </a>
            <a class="menu-navbar-top" href="{{ url('curricula') }}">
                หลักสูตร
            </a>

            <a class="menu-navbar-top">
                บุคลากร
            </a>

            <a class="menu-navbar-top" href="{{ url('document') }}">
                เอกสาร
            </a>

            <a class="menu-navbar-top">
                เกี่ยวกับภาควิชา
            </a>

        </div>
        <button class="btn-hamberger" onclick="clickBtnMenu()"><i class="fa fa-bars" aria-hidden="true"></i></button>
        <ul class="wrapper-list-nav-mobile" id="menuMobile">
            <li class="list-nav-mobile">ข่าวสาร</li>
            <li class="list-nav-mobile">ข่าวสาร</li>
            <li class="list-nav-mobile">ข่าวสาร</li>
            <li class="list-nav-mobile">ข่าวสาร</li>
            <li class="list-nav-mobile">ข่าวสาร</li>
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
                        <a href="" target="_blank">
                            <img src="{{URL::asset('image/Facebook_Color.svg')}}"/>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="col-menu-navbar-bottom">
                <h3 class="title-navbar-bottom">หลักสูตร</h3>
                <ul class="menu-title-navbar-bottom">
                    <li>
                        <a>ปริญญาตรี</a>
                    </li>
                    <li>
                        <a>ปริญญาโท</a>
                    </li>
                    <li>
                        <a>ปริญญาเอก</a>
                    </li>
                </ul>
            </li>
            <li class="col-menu-navbar-bottom">
                <h3 class="title-navbar-bottom">บุคลากร</h3>
                <ul class="menu-title-navbar-bottom">
                    <li>
                        <a>สายวิชาการ</a>
                    </li>
                    <li>
                        <a>สายสนับสนุนวิชาการ</a>
                    </li>

                </ul>
            </li>
            <li class="col-menu-navbar-bottom">
                <h3 class="title-navbar-bottom">เกี่ยวกับภาควิชา</h3>
                <ul class="menu-title-navbar-bottom">
                    <li>
                        <a>ประวัติภาควิชา</a>
                    </li>
                    <li>
                        <a>ติดต่อภาควิชา</a>
                    </li>

                </ul>
            </li>
        </ul>

    </div>
    <p class="copyright">© 2017 by Department of Computing, Faculty of Science, Silpakorn University.</p>
</nav>

<script src="{{ URL::asset('js/bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ URL::asset('js/bower_components/OwlCarousel2-2.2.1/dist/owl.carousel.min.js') }}"></script>
<script src="{{URL::asset('js/slide.js')}}"></script>
<script src="{{URL::asset('js/fb.js')}}"></script>
<script>

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
    var slider = $('.owl-carousel');

    $('.button-next').click(function () {
        slider.trigger('next.owl.carousel');
    });
    $('.button-previous').click(function () {
        slider.trigger('prev.owl.carousel');
    });
</script>

</body>
</html>