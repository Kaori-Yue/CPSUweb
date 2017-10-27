<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome-4.7.0/css/font-awesome.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
    @yield('meta')
</head>
<body>
<nav class="navbar">
    <div class="container">
        <a href="{{ url('') }}"><h1 class="logo-navbar">CPSU</h1>
        <ul class="list-menu-navbar">

            <li class="
            @if(Request::is('blog'))active-menu-navbar
            @else menu-navbar  @endif ">
                <a href="{{ url('blog') }}">ข่าวสาร</a>
            </li>
            <li class="
            @if(Request::is('curricula'))active-menu-navbar
            @else menu-navbar  @endif ">
                <a href="{{ url('curricula') }}">หลักสูตร</a>
            </li>
            <li class="menu-navbar">บุคลากร
                <ul class="drop-down-menu">
                    <li class="list-menu-drop-down">
                        <a href="{{ url('teacher') }}">สายวิชาการ</a>
                    </li>
                    <li class="list-menu-drop-down">
                        <a href="{{ url('staff') }}">สายสนับสนุนวิชาการ</a>
                    </li>
                </ul>

            </li>
            <!--<li class="menu-navbar">
                <a href="{{ url('research') }}">ผลงานวิจัย</a>
            </li>-->
            <li class="
            @if(Request::is('document'))active-menu-navbar
            @else menu-navbar  @endif ">
                <a href="{{ url('document') }}">เอกสาร</a>
            </li>
            <li class="menu-navbar">
                <a>เกี่ยวกับภาควิชา</a>
                <ul class="drop-down-menu">
                    <li class="list-menu-drop-down">
                        <a href="{{url('history')}}">ประวัติภาควิชา</a>
                    </li>
                    <li class="list-menu-drop-down">
                        <a href="{{url('sitemap')}}">แผนผังเว็บไซต์</a>
                    </li>
                    <li class="list-menu-drop-down">
                        <a href="{{url('contact')}}">ติดต่อภาควิชา</a>
                    </li>
                </ul>
            </li>
        </ul>
        <button class="btn-navbar-list-menu" onclick="clickBtnMenu()"><i class="fa fa-bars" aria-hidden="true"></i></button>
        <ul class="list-menu-navbar-mobile" id="menuMobile">
            <li class="menu-navbar-mobile">
                <a href="{{ url('blog') }}">ข่าวสาร</a>
            </li>
            <li class="menu-navbar-mobile" >
                <a href="{{ url('curricula') }}">หลักสูตร</a>
            </li>
            <li class="menu-navbar-mobile">บุคลากร
                <ul class="subs-menu-navbar-mobile">
                    <li class="sub-menu-navbar-mobile">
                        <a href="{{url('history')}}">สายวิชาการ</a>
                    </li>
                    <li class="sub-menu-navbar-mobile">
                        <a href="{{url('sitemap')}}">สายสนับสนุนวิชาการ</a>
                    </li>
                </ul>
            </li>
            <!--<li class="menu-navbar-mobile">
                <a href="{{ url('research') }}">ผลงานวิจัย</a>
            </li>-->
            <li class="menu-navbar-mobile">
                <a href="{{ url('document') }}">เอกสาร</a>
            </li>
            <li class="menu-navbar-mobile" id="buttonSubMenu">เกี่ยวกับภาควิชา
                <ul class="subs-menu-navbar-mobile" id="subMenuMobile">
                    <li class="sub-menu-navbar-mobile">
                        <a href="{{url('history')}}">ประวัติภาควิชา</a>
                    </li>
                    <li class="sub-menu-navbar-mobile">
                        <a href="{{url('sitemap')}}">แผนผังเว็บไซต์</a>
                    </li>
                    <li class="sub-menu-navbar-mobile">
                        <a href="{{url('contact')}}">ติดต่อภาควิชา</a>
                    </li>
                </ul>

            </li>
        </ul>
    </div>
</nav>
@yield('content')

<nav class="navbar-bottom">
    <div class="container">
        <ul class="logos-navbar-bottom">
            <li class="logo-navbar-bottom">
                <a href="https://www.facebook.com/cpsilpakorn/?ref=br_rs/" target="_blank">
                <img src="{{ URL::asset('image/facebook_white.png') }}">
                </a>
            </li>
        </ul>
        <p class="copyright">Copyright © 2017 by Department of Computing, Faculty of Science, Silpakorn University.</p>
    </div>
</nav>
<script src="{{URL::asset('js/slide.js')}}"></script>
<script src="{{URL::asset('js/fb.js')}}"></script>

</body>
</html>