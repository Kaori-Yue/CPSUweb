
{{--<div class="form-contact">--}}
        {{--<div class="title-form-contact">--}}
            {{--แผนผังเว็บไซต์--}}
        {{--</div>--}}
        {{--<div class="detail-form-contact">--}}
            {{--<a href="{{ url('curricula') }}"><h1 class="title">หลักสูตร</h1></a>--}}
            {{--<ul class="wrapper-detail-all">--}}
                {{--<li>--}}
                    {{--<ul class="list-detail-all">--}}
                        {{--<li class="in-detail"><a href="{{ url('curricula#bachelor-degree') }}" class="link-in-detail">หลักสูตรปริญญาตรี</a></li>--}}
                        {{--<li class="in-detail"><a href="{{ url('curricula#master-degree') }}" class="link-in-detail">หลักสูตรปริญญาโท</a></li>--}}
                        {{--<li class="in-detail"><a href="{{ url('curricula#doctor-degree') }}" class="link-in-detail">หลักสูตรปริญญาเอก</a></li>--}}
                    {{--</ul>--}}

                {{--</li>--}}
            {{--</ul>--}}
            {{--<a href="{{ url('blog') }}"><h1 class="title">ข่าวสาร</h1></a>--}}
            {{--<ul class="wrapper-detail-all">--}}
                {{--<li>--}}
                    {{--<p class="title-detail-all">ข่าวล่าสุด</p>--}}
                    {{--<ul class="list-detail-all">--}}
                        {{--<li class="in-detail"><a href="{{ url('blog#latest-news') }}" class="link-in-detail">ดูข่าวล่าสุด</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<p class="title-detail-all">ข่าวตามหมวดหมู่</p>--}}
                    {{--<ul class="list-detail-all">--}}
                        {{--<li class="in-detail"><a class="link-in-detail">ดูข่าวแสดงความยินดี</a></li>--}}
                        {{--<li class="in-detail"><a class="link-in-detail">ดูข่าวการแข่งขัน</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
            {{--</ul>--}}

            {{--<a href="{{ url('teacher') }}"><h1 class="title">บุคลากร</h1></a>--}}
            {{--<ul class="wrapper-detail-all">--}}
                {{--<li>--}}
                    {{--<p class="title-detail-all">คณาจารย์</p>--}}
                    {{--<ul class="list-detail-all">--}}
                        {{--<li class="in-detail"><a href="{{ url('teacher#teacher') }}" class="link-in-detail">ดูคณาจารย์ทั้งหมด</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<p class="title-detail-all">เจ้าหน้าที่</p>--}}
                    {{--<ul class="list-detail-all">--}}
                        {{--<li class="in-detail"><a href="{{ url('teacher#staff') }}" class="link-in-detail">ดูเจ้าหน้าที่ทั้งหมด</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
            {{--</ul>--}}
            {{--<!--<h1 class="title">ผลงานวิจัย</h1>--}}
            {{--<ul class="wrapper-detail-all">--}}
                {{--<li>--}}
                    {{--<ul class="list-detail-all">--}}
                        {{--<li class="in-detail"><a class="link-in-detail">ดูผลงานวิจัยทั้งหมด</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
            {{--</ul>-->--}}
            {{--<h1 class="title">เกี่ยวกับภาควิชา</h1>--}}
            {{--<ul class="wrapper-detail-all">--}}
                {{--<li>--}}
                    {{--<a href="{{ url('history') }}"><p class="title-detail-all">ประวัติภาควิชา</p></a>--}}
                    {{--<ul class="list-detail-all">--}}
                        {{--<li class="in-detail"><a href="{{ url('history') }}" class="link-in-detail">ดูประวัติภาควิชา</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<p class="title-detail-all">ที่อยู่ภาควิชา</p>--}}
                    {{--<ul class="list-detail-all">--}}
                        {{--<li class="in-detail"><a href="{{ url('contact#address') }}" class="link-in-detail">ดูที่อยู่ภาควิชา</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<p class="title-detail-all">เบอร์โทรศัพท์</p>--}}
                    {{--<ul class="list-detail-all">--}}
                        {{--<li class="in-detail"><a href="{{ url('contact#telephone') }}" class="link-in-detail">ดูเบอร์โทรศัพท์</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<p class="title-detail-all">โทรสาร</p>--}}
                    {{--<ul class="list-detail-all">--}}
                        {{--<li class="in-detail"><a href="{{ url('contact#fax') }}" class="link-in-detail">ดูโทรสาร</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<p class="title-detail-all">แผนที่</p>--}}
                    {{--<ul class="list-detail-all">--}}
                        {{--<li class="in-detail"><a href="{{ url('contact#map') }}" class="link-in-detail">ดูแผนที่</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</div>--}}


        <ul class="wrapper-nav">
            <li class="list-nav">
                <a href="{{url("")}}">
                    <img src="{{ URL::asset('image/home-nav.svg') }}" class="image-home-list-nav">
                </a>
            </li>
            <li class="list-nav">
                <img src="{{ URL::asset('image/chevron-right-green.svg') }}" class="image-chevron-right-list-nav">
            </li>
            <li class="list-nav"><a href="{{url("department")}}">เกี่ยวกับภาควิชา</a></li>
            <li class="list-nav">
                <img src="{{ URL::asset('image/chevron-right-green.svg') }}" class="image-chevron-right-list-nav">
            </li>
            <li class="list-nav">แผนผังเว็บไซต์</li>
        </ul>
        <div class="wrapper-header-title">
            <h1 class="header-title ">แผนผังเว็บไซต์</h1>
            <div class="line-header-title"></div>
        </div>

        <ul class="wrapper-detail-all">
            <li class="header-big-detail">ข่าวสาร</li>
            <li class="list-detail-all">
                <p class="header-small-detail">ข่าวเด่น</p>
                <ul class="wrapper-small-detail">
                    <li class="list-small-detail">
                        <a href="{{ url('blog#featured-news') }}">ดูข่าวเด่นทั้งหมด</a>
                    </li>

                </ul>
            </li>
            <li class="list-detail-all">
                <p class="header-small-detail">ข่าวล่าสุด</p>
                <ul class="wrapper-small-detail">
                    <li class="list-small-detail"><a href="blog#latest-news">ดูข่าวล่าสุดทั้งหมด</a></li>

                </ul>
            </li>
            <li class="list-detail-all">
                <p class="header-small-detail">ข่าวตามหมวดหมู่</p>
                <ul class="wrapper-small-detail">
                    <li class="list-small-detail"><a ></a></li>

                </ul>
            </li>
            <li class="header-big-detail">หลักสูตร</li>
            <li class="list-detail-all">
                <p class="header-small-detail">ปริญญาตรี</p>
                <ul class="wrapper-small-detail">
                    <li class="list-small-detail">
                        <a href="{{url("curricula/bachelor")}}">ดูหลักสูตรปริญญาตรีทั้งหมด</a>
                    </li>

                </ul>
            </li>
            <li class="list-detail-all">
                <p class="header-small-detail">ปริญญาโท</p>
                <ul class="wrapper-small-detail">
                    <li class="list-small-detail">
                        <a href="{{url("curricula/master")}}">ดูหลักสูตรปริญญาโททั้งหมด</a>
                    </li>

                </ul>
            </li>
            <li class="list-detail-all">
                <p class="header-small-detail">ปริญญาเอก</p>
                <ul class="wrapper-small-detail">
                    <li class="list-small-detail">
                        <a href="{{url("curricula/doctor")}}">ดูหลักสูตรปริญญาเอกทั้งหมด</a>
                    </li>

                </ul>
            </li>
            <li class="header-big-detail">บุคลากร</li>
            <li class="list-detail-all">
                <p class="header-small-detail">สายวิชาการ</p>
                <ul class="wrapper-small-detail">
                    <li class="list-small-detail">
                        <a href="{{ url('teacher') }}">สายวิชาการทั้งหมด</a>
                    </li>

                </ul>
            </li>
            <li class="list-detail-all">
                <p class="header-small-detail">สายสนับสนุนวิชาการ</p>
                <ul class="wrapper-small-detail">
                    <li class="list-small-detail">
                        <a href="{{ url('staff') }}">สายสนับสนุนวิชาการทั้งหมด</a>
                    </li>
                </ul>
            </li>

        </ul>


