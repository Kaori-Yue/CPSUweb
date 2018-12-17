<nav class="navbar navbar-fixed-top">
    <div class="container" style="padding-top: 0;padding-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">
                <b>CPSU</b>
            </a>
        </div>
        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="nav navbar-nav">
                <li {{--class="active"--}}>
                    <a href="{{ url('curricula') }}">
                        หลักสูตร
                    </a>
                </li>
                <li>
                    <a href="{{ url('blog') }}">
                        ข่าวสาร
                    </a>
                </li>
                <li>


                        {{-- $teacher = Teacher::where('user_id', '=', $login->id)->first(); --}}
                    {{-- {{dd(  App\Teacher::where('user_id', '=', Auth::user()->id - 1)->first()  )}} --}}

                    @if(is_null(Auth::user()))
                    {{-- visitor --}}
                        {{-- <a href="{{ url('research/') }}">
                            ผลงานวิจัย
                        </a> --}}
                    @elseif(is_null(App\Teacher::where('user_id', '=', Auth::user()->id - 1)->first()))
                    {{-- admin --}}
                        <a href="{{ url('admin/research') }}">
                            ผลงานวิจัย
                        </a>
                    @else
                    {{-- teacher --}}
                        <a href="{{ url('research/' . App\Teacher::where('user_id', '=', Auth::user()->id - 1)->first()->id) }}">
                                ผลงานวิจัย
                        </a>
                    @endif
                </li>
                <li>
                    <a href="{{ url('teacher') }}">
                        บุคลากร
                    </a>
                </li>
                <li>
                    <a href="{{ url('document') }}">
                        เอกสาร
                    </a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        เกี่ยวกับ <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('history') }}">ประวัติภาควิชา</a></li>
                        <li><a href="{{ url('sitemap') }}">แผนผังเว็บไซต์</a></li>
                        <li><a href="{{ url('contact') }}">ติดต่อ</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                <li><a href="{{ route('login') }}">Login</a></li>
                {{--<li><a href="{{ route('register') }}">Register</a></li>--}}
                @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        @if(Auth::user()->role == 'admin')
                            <i class="material-icons" style="font-size:14px">stars</i>
                        @endif
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ url('dashboard') }}">
                                <b>Dashboard</b>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('profile') }}">
                                <b>Profile</b>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
                @endif

                {{--<li>
                    <a href="#">
                        <span class="glyphicon glyphicon-search"></span>
                    </a>
                </li>--}}
            </ul>
        </div>
    </div>
</nav>