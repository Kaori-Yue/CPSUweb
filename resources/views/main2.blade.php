<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
</head>
<body>
<nav class="navbar">
    <div class="container">
        <h1 class="logo-navbar">CPSU</h1>
        <ul class="list-menu-navbar">
            <li class="menu-navbar">
                <a href="{{ url('blog') }}">ข่าวสาร</a>
            </li>
            <li class="menu-navbar">
                <a href="{{ url('curricula') }}">หลักสูตร</a>
            </li>
            <li class="menu-navbar">
                <a href="{{ url('teacher') }}">บุคลากร</a>
            </li>
            <li class="menu-navbar">
                <a href="{{ url('research') }}">ผลงานวิจัย</a>
            </li>
            <li class="menu-navbar">
                <a href="{{ url('document') }}">เอกสาร</a>
            </li>
            <li class="menu-navbar">เกี่ยวกับภาควิชา
                <ul class="drop-down-menu">
                    <li class="list-menu-drop-down">ประวัติภาควิชา</li>
                    <li class="list-menu-drop-down">ติดต่อภาควิชา</li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
<div class="container">
    @yield('content')
</div>

<nav class="navbar-bottom">
    <div class="container">
        <ul class="logos-navbar-bottom">
            <li class="logo-navbar-bottom">
                <img src="{{ URL::asset('image/facebook_white.png') }}">
            </li>
        </ul>
        <p class="copyright">Copyright © 2017 by Department of Computing, Faculty of Science, Silpakorn University.</p>
    </div>
</nav>

</body>
</html>