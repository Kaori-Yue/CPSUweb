<nav class="navbar navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">CPSU</a>
        </div>
        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        หลักสูตร <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Bachelor Degree</a></li>
                        <li><a href="#">Master Degree</a></li>
                        <li><a href="#">Doctor Degree</a></li>
                    </ul>
                </li>
                <li {{--class="active"--}}><a href="{{ url('blog') }}">ข่าวสาร</a></li>
                <li><a href="{{ url('research') }}">งานวิจัย</a></li>
                <li><a href="{{ url('thesis') }}">ผลงานนักศึกษา</a></li>
                <li><a href="{{ url('teacher') }}">บุคลากร</a></li>
                <li><a href="{{ url('contact') }}">ติดต่อ</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                {{--<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>--}}
                <li><a href="#"><span class="glyphicon glyphicon-search"></span> ค้นหา</a></li>
            </ul>
        </div>
    </div>
</nav>