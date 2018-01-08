@extends('main2')

@section('title', "หน้าหลัก")

@section('content')

    {{--<div class="slideshow-container">--}}
        {{--@foreach($announce->blogs as $blog)--}}
        {{--<div class="mySlides fade">--}}
            {{--@if(count($blog) != 0)--}}
            {{--<a href="{{url('blog/'.$blog->slug)}}" >--}}
                {{--<img src="{{ url('image/show/'.$blog->cover) }}" />--}}
            {{--</a>--}}
            {{--@endif--}}
            {{--<!--<div class="text">Caption Text</div>-->--}}
        {{--</div>--}}
        {{--@endforeach--}}
        {{--<a class="prev" onclick="plusSlides(-1)">&#10094;</a>--}}
        {{--<a class="next" onclick="plusSlides(1)">&#10095;</a>--}}
        {{--<div class="zone-dot">--}}
            {{--<p></p>--}}
            {{--@foreach($announce->blogs as $blog)--}}
                {{--<span class="dot" onclick="currentSlide({{$loop->iteration}})"></span>--}}
            {{--@endforeach--}}
        {{--</div>--}}
    {{--</div>--}}
    <div class="container-content">
        <ul class="wrapper-image-slide-announcement owl-carousel-announcement-home-page owl-carousel owl-theme">
            @foreach($bookmarks as $bookmark)
            <li class="wrapper-image-slide-announcement">
                <a href="{{"news/". $bookmark->slug}}"><img src="{{ url('image/crop/'.$bookmark->cover) }}" /></a>
            </li>
            @endforeach
        </ul>


        <ul class="wrapper-news-home-page">
            <li class="list-wrapper-news-home-page">
                <div class="wrapper-header-title">
                    <h1 class="header-title">ข่าวเด่น</h1>
                    <div class="wrapper-buttom-next-previous">
                        <button class="button-previous" id="btn-prve-news" >
                            <img src="{{ URL::asset('image/chevron-left.svg') }}">
                        </button>
                        <button class="button-next" id="btn-next-news">
                            <img src="{{ URL::asset('image/chevron-right.svg') }}">
                        </button>
                    </div>
                    <div class="line-header-title"></div>
                </div>
                <ul class="wrapper-card-news owl-carousel-news-home owl-carousel" id="news">
                    @foreach($blogs_f as $blog_f)
                        @include('blog._card6', $blog_f)
                    @endforeach
                </ul>
            </li>
            <li class="list-wrapper-news-home-page">
                <div class="wrapper-header-title">
                    <h1 class="header-title">ข่าวล่าสุด</h1>
                    <div class="line-header-title"></div>
                </div>
                <ul class="wrapper-card-news">
                    @foreach($blogs as $blog)
                        @include('blog._card7', $blog)
                    @endforeach
                    <li class="list-wrapper-card-news">
                        <a href="news" class="watch-more-card-news">ดูข่าวทั้งหมด</a>
                    </li>
                </ul>
            </li>
        </ul>



    {{--<h1 class="title">ข่าวล่าสุด--}}
        {{--<a href="{{url('blog')}}" class="more-detail-title">ดูข่าวเพิ่มเติม</a>--}}
    {{--</h1>--}}

    {{--}}<ul class="wrapper-card-news">
        @foreach($blogs as $blog)
        <li>
            @include('blog._card2', $blog)
        </li>
        @endforeach
    </ul>


    {{--<h1 class="title">หลักสูตร--}}
        {{--<a href="{{url('curricula')}}" class="more-detail-title">ดูหลักสูตรเพิ่มเติม</a>--}}
    {{--</h1>--}}
        {{--<div class="wrapper-header-title">--}}
            {{--<h1 class="header-title">หลักสูตรปริญญาเอก</h1>--}}
            {{--<div class="line-header-title"></div>--}}

        {{--</div>--}}
        {{--<ul class="wrapper-cand-all">--}}
            {{--<li class="list-wrapper-card-all">--}}
                {{--<div class="card-curricula">--}}
                    {{--<img src="{{ URL::asset('image/012-book-2.svg') }}" class="image-card-curricula">--}}
                    {{--<h3 class="type-card-curricula">ปริญญาตรี</h3>--}}
                    {{--<p class="detail-card-curricula">วิทยาการคอมพิวเตอร์<br>เทคโนโลยีสารสนเทศ</p>--}}
                {{--</div>--}}
            {{--</li>--}}
            {{--<li class="list-wrapper-card-all">--}}
                {{--<div class="card-curricula">--}}
                    {{--<img src="{{ URL::asset('image/012-book-2.svg') }}" class="image-card-curricula">--}}
                    {{--<h3 class="type-card-curricula">ปริญญาโท</h3>--}}
                    {{--<p class="detail-card-curricula">เทคโนโลยีสารสนเทศ</p>--}}
                {{--</div>--}}
            {{--</li>--}}
            {{--<li class="list-wrapper-card-all">--}}
                {{--<div class="card-curricula">--}}
                    {{--<img src="{{ URL::asset('image/012-book-2.svg') }}" class="image-card-curricula">--}}
                    {{--<h3 class="type-card-curricula">ปริญญาเอก</h3>--}}
                    {{--<p class="detail-card-curricula">เทคโนโลยีสารสนเทศ</p>--}}
                {{--</div>--}}
            {{--</li>--}}
        {{--</ul>--}}
        {{--<div class="wrapper-header-title">--}}
            {{--<h1 class="header-title">บุคลากร</h1>--}}
            {{--<div class="line-header-title"></div>--}}

        {{--</div>--}}
        {{--<ul class="wrapper-card-type-person">--}}
            {{--<li class="list-card-type-person">--}}
                {{--<div class="card-type-person">--}}
                    {{--<img src="{{ URL::asset('image/002-idea.svg') }}" class="image-card-type-person">--}}
                    {{--<h3 class="name-card-type-person">สายวิชาการ</h3>--}}
                {{--</div>--}}
            {{--</li>--}}
            {{--<li class="list-card-type-person">--}}
                {{--<div class="card-type-person">--}}
                    {{--<img src="{{ URL::asset('image/001-teamwork-2.svg') }}" class="image-card-type-person">--}}
                    {{--<h3 class="name-card-type-person">สายสนับสนุนวิชาการ</h3>--}}
                {{--</div>--}}
            {{--</li>--}}
        {{--</ul>--}}

        {{--<div class="wrapper-header-title">--}}
            {{--<h1 class="header-title">หลักสูตรปริญญาตรี</h1>--}}
            {{--<div class="line-header-title"></div>--}}
        {{--</div>--}}

        {{--<ul class="wrapper-card-detail-curricula">--}}
            {{--<li class="list-card-detail-curricula">--}}
                {{--<div class="card-detail-curricula">--}}
                    {{--<ul class="wrapper-in-card-detail-curricula">--}}
                        {{--<li class="list-in-card-detail-curricula">--}}
                            {{--<img src="{{ URL::asset('image/010-book-4.svg') }}" class="image-card-detail-curricula">--}}
                        {{--</li>--}}
                        {{--<li class="list-in-card-detail-curricula">--}}
                            {{--<p class="field-card-detail-curricula">วิทยาการคอมพิวเตอร์</p>--}}
                            {{--<p class="name-card-detail-curricula">หลักสูตรวิทยาศาสตร์บัณฑิต สาขาวิทยาการคอมพิวเตอร์ 2560</p>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</li>--}}
            {{--<li class="list-card-detail-curricula">--}}
                {{--<div class="card-detail-curricula">--}}
                    {{--<ul class="wrapper-in-card-detail-curricula">--}}
                        {{--<li class="list-in-card-detail-curricula">--}}
                            {{--<img src="{{ URL::asset('image/010-book-4.svg') }}" class="image-card-detail-curricula">--}}
                        {{--</li>--}}
                        {{--<li class="list-in-card-detail-curricula">--}}
                            {{--<p class="field-card-detail-curricula">วิทยาการคอมพิวเตอร์</p>--}}
                            {{--<p class="name-card-detail-curricula">หลักสูตรวิทยาศาสตร์บัณฑิต สาขาวิทยาการคอมพิวเตอร์ 2560</p>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</li>--}}
        {{--</ul>--}}

        {{--<div class="wrapper-header-title">--}}
            {{--<h1 class="header-title">แบบฟอร์มทั่วไป</h1>--}}
            {{--<div class="line-header-title"></div>--}}
        {{--</div>--}}

        {{--<ul class="wrapper-cand-all">--}}
            {{--<li class="list-wrapper-card-all">--}}
                {{--<div class="card-document">--}}
                    {{--<p class="name-card-document">มศก.1</p>--}}
                    {{--<p class="decription-card-document">แบบขอตรวจสอบคุณสมบัติในการมีสิทธิขอจัดทําโครงงานปริญญานิพนธ์ (สาขาวิชาวิทยาการคอมพิวเตอร์) (หลักสูตร 55)...</p>--}}
                    {{--<button class="btn-download-card-document">--}}
                        {{--<img src="{{ URL::asset('image/download-icon.svg') }}">--}}
                    {{--</button>--}}

                {{--</div>--}}
            {{--</li>--}}
            {{--<li class="list-wrapper-card-all">--}}
                {{--<div class="card-document">--}}
                    {{--<p class="name-card-document">มศก.1</p>--}}
                    {{--<p class="decription-card-document">แบบขอตรวจสอบคุณสมบัติในการมีสิทธิขอจัดทําโครงงานปริญญานิพนธ์ (สาขาวิชาวิทยาการคอมพิวเตอร์) (หลักสูตร 55)...</p>--}}
                    {{--<button class="btn-download-card-document">--}}
                        {{--<img src="{{ URL::asset('image/download-icon.svg') }}">--}}
                    {{--</button>--}}

                {{--</div>--}}
            {{--</li>--}}
            {{--<li class="list-wrapper-card-all">--}}
                {{--<div class="card-document">--}}
                    {{--<p class="name-card-document">มศก.1</p>--}}
                    {{--<p class="decription-card-document">แบบขอตรวจสอบคุณสมบัติในการมีสิทธิขอจัดทําโครงงานปริญญานิพนธ์ (สาขาวิชาวิทยาการคอมพิวเตอร์) (หลักสูตร 55)...</p>--}}
                    {{--<button class="btn-download-card-document">--}}
                        {{--<img src="{{ URL::asset('image/download-icon.svg') }}">--}}
                    {{--</button>--}}

                {{--</div>--}}
            {{--</li>--}}
        {{--</ul>--}}

        {{--<div class="wrapper-header-title">--}}
            {{--<h1 class="header-title">บุคลากรสายวิชาการ</h1>--}}
            {{--<div class="line-header-title"></div>--}}
        {{--</div>--}}

        {{--<ul class="wrapper-cand-all">--}}
            {{--<li class="list-wrapper-card-all">--}}
                {{--<div class="card-person">--}}
                    {{--<img class="image-card-person" src="{{ URL::asset('image/nut-demo.jpeg') }}" />--}}
                    {{--<h3 class="role-card-person">หัวหน้าภาควิชา</h3>--}}
                    {{--<p class="name-card-person">อ.ดร.ณัฐโชติ พรหมฤทธิ์</p>--}}
                {{--</div>--}}
            {{--</li>--}}
            {{--<li class="list-wrapper-card-all">--}}
                {{--<div class="card-person active-card-person">--}}
                    {{--<img class="image-card-person" src="{{ URL::asset('image/nut-demo.jpeg') }}" />--}}
                    {{--<h3 class="role-card-person">หัวหน้าภาควิชา</h3>--}}
                    {{--<p class="name-card-person">อ.ดร.ณัฐโชติ พรหมฤทธิ์</p>--}}
                {{--</div>--}}
            {{--</li>--}}
            {{--<li class="list-wrapper-card-all">--}}
                {{--<div class="card-person">--}}
                    {{--<img class="image-card-person" src="{{ URL::asset('image/nut-demo.jpeg') }}" />--}}
                    {{--<h3 class="role-card-person">หัวหน้าภาควิชา</h3>--}}
                    {{--<p class="name-card-person">อ.ดร.ณัฐโชติ พรหมฤทธิ์</p>--}}
                {{--</div>--}}
            {{--</li>--}}

        {{--</ul>--}}
        {{--<div class="wrapper-header-title">--}}
            {{--<h1 class="header-title">บุคลากรสายวิชาการ</h1>--}}
            {{--<div class="wrapper-buttom-next-previous">--}}
                {{--<button class="button-previous" id="btn-prve-teacher">--}}
                    {{--<img src="{{ URL::asset('image/chevron-left.svg') }}">--}}
                {{--</button>--}}
                {{--<button class="button-next" id="btn-next-teacher">--}}
                    {{--<img src="{{ URL::asset('image/chevron-right.svg') }}">--}}
                {{--</button>--}}
            {{--</div>--}}
            {{--<div class="line-header-title"></div>--}}
        {{--</div>--}}

        {{--<ul class="wrapper-card-person-read-person owl-carousel-teachers owl-carousel" id="teachers">--}}
            {{--<li class="list-wrapper-card-person-read-person">--}}
                {{--<div class="card-person">--}}
                    {{--<img class="image-card-person" src="{{ URL::asset('image/nut-demo.jpeg') }}" />--}}
                    {{--<h3 class="role-card-person">หัวหน้าภาควิชา</h3>--}}
                    {{--<p class="name-card-person">อ.ดร.ณัฐโชติ พรหมฤทธิ์</p>--}}
                {{--</div>--}}
            {{--</li>--}}
            {{--<li class="list-wrapper-card-person-read-person">--}}
                {{--<div class="card-person">--}}
                    {{--<img class="image-card-person" src="{{ URL::asset('image/nut-demo.jpeg') }}" />--}}
                    {{--<h3 class="role-card-person">หัวหน้าภาควิชา</h3>--}}
                    {{--<p class="name-card-person">อ.ดร.ณัฐโชติ พรหมฤทธิ์</p>--}}
                {{--</div>--}}
            {{--</li>--}}
            {{--<li class="list-wrapper-card-person-read-person">--}}
                {{--<div class="card-person">--}}
                    {{--<img class="image-card-person" src="{{ URL::asset('image/nut-demo.jpeg') }}" />--}}
                    {{--<h3 class="role-card-person">หัวหน้าภาควิชา</h3>--}}
                    {{--<p class="name-card-person">อ.ดร.ณัฐโชติ พรหมฤทธิ์</p>--}}
                {{--</div>--}}
            {{--</li>--}}
            {{--<li class="list-wrapper-card-person-read-person">--}}
                {{--<div class="card-person active-card-person-read-person">--}}
                    {{--<img class="image-card-person" src="{{ URL::asset('image/nut-demo.jpeg') }}" />--}}
                    {{--<h3 class="role-card-person">หัวหน้าภาควิชา</h3>--}}
                    {{--<p class="name-card-person">อ.ดร.ณัฐโชติ พรหมฤทธิ์</p>--}}
                {{--</div>--}}
            {{--</li>--}}
            {{--<li class="list-wrapper-card-person-read-person">--}}
                {{--<div class="card-person">--}}
                    {{--<img class="image-card-person" src="{{ URL::asset('image/nut-demo.jpeg') }}" />--}}
                    {{--<h3 class="role-card-person">หัวหน้าภาควิชา</h3>--}}
                    {{--<p class="name-card-person">อ.ดร.ณัฐโชติ พรหมฤทธิ์</p>--}}
                {{--</div>--}}
            {{--</li>--}}
        {{--</ul>--}}

        {{--<div class="card-read-person">--}}
            {{--<div class="header-card-read-person">--}}
                {{--<img class="image-header-card-person" src="{{ URL::asset('image/nut-demo.jpeg') }}"/>--}}
                {{--<p class="role-card-read-person">หัวหน้าภาควิชา</p>--}}
                {{--<h3 class="name-th-card-read-person">อ.ดร.ณัฐโชติ พรหมฤทธิ์</h3>--}}
                {{--<h3 class="name-eng-card-read-person">Dr.Nuttachot Promrit</h3>--}}
            {{--</div>--}}

            {{--<ul class="wrapper-detail-all">--}}

                {{--<li class="list-detail-all">--}}
                    {{--<p class="header-small-detail">ประวัติการศึกษา</p>--}}
                    {{--<ul class="wrapper-small-detail">--}}
                        {{--<li class="list-small-detail">ปร.ด. (เทคโนโลยีสารสนเทศ) มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ (2558)</li>--}}
                        {{--<li class="list-small-detail">ปร.ด. (เทคโนโลยีสารสนเทศ) มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ (2558)</li>--}}
                        {{--<li class="list-small-detail">ปร.ด. (เทคโนโลยีสารสนเทศ) มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ (2558)</li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                {{--<li class="list-detail-all">--}}
                    {{--<p class="header-small-detail">สาขาที่เชี่ยวชาญ</p>--}}
                    {{--<ul class="wrapper-small-detail">--}}
                        {{--<li class="list-small-detail">Network Management, Computer and Network Security</li>--}}

                    {{--</ul>--}}
                {{--</li>--}}
                {{--<li class="list-detail-all">--}}
                    {{--<p class="header-small-detail">อีเมล</p>--}}
                    {{--<ul class="wrapper-small-detail">--}}
                        {{--<li class="list-small-detail">promrit_n@su.ac.th</li>--}}

                    {{--</ul>--}}
                {{--</li>--}}
                {{--<li class="list-detail-all">--}}
                    {{--<p class="header-small-detail">เว็บไซต์</p>--}}
                    {{--<ul class="wrapper-small-detail">--}}
                        {{--<li class="list-small-detail">webserv.cp.su.ac.th/lecturer/npromrit</li>--}}

                    {{--</ul>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</div>--}}


        {{--<div class="wrapper-header-title">--}}
            {{--<h1 class="header-title">หลักสูตรวิทยาศาสตร์บัณฑิต สาขาเทคโนโลยีสารสนเทศ 2560</h1>--}}
            {{--<div class="line-header-title"></div>--}}
        {{--</div>--}}

        {{--<ul class="wrapper-detail-all">--}}
            {{--<li class="header-big-detail">ชื่อปริญญา</li>--}}
            {{--<li class="list-detail-all">--}}
                {{--<p class="header-small-detail">ภาษาไทย</p>--}}
                {{--<ul class="wrapper-small-detail">--}}
                    {{--<li class="list-small-detail">หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาเทคโนโลยีสารสนเทศ 2560</li>--}}

                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="list-detail-all">--}}
                {{--<p class="header-small-detail">ภาษาอังกฤษ</p>--}}
                {{--<ul class="wrapper-small-detail">--}}
                    {{--<li class="list-small-detail">Bachelor of Science Program in Information Technology 2017</li>--}}

                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="header-big-detail">ชื่อหลักสูตร</li>--}}
            {{--<li class="list-detail-all">--}}
                {{--<p class="header-small-detail">ภาษาไทย</p>--}}
                {{--<ul class="wrapper-small-detail">--}}
                    {{--<li class="list-small-detail">วิทยาศาสตรบัณฑิต (เทคโนโลยีสารสนเทศ)</li>--}}

                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="list-detail-all">--}}
                {{--<p class="header-small-detail">ภาษาอังกฤษ</p>--}}
                {{--<ul class="wrapper-small-detail">--}}
                    {{--<li class="list-small-detail">Bachelor of Science (Information Technology)</li>--}}

                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="header-big-detail">เกณท์การเข้าศึกษา และ เกณท์การสำเร็จการศึกษา</li>--}}
            {{--<li class="list-detail-all">--}}
                {{--<p class="header-small-detail">เกณฑ์การเข้าศึกษา</p>--}}
                {{--<ul class="wrapper-small-detail">--}}
                    {{--<li class="list-small-detail">สำเร็จการศึกษาระดับมัธยมศึกษาปีที่ 6 หรือเทียบเท่า</li>--}}

                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="list-detail-all">--}}
                {{--<p class="header-small-detail">เกณฑ์การเข้าศึกษา</p>--}}
                {{--<ul class="wrapper-small-detail">--}}
                    {{--<li class="list-small-detail">นักเทคโนโลยีสารสนเทศ</li>--}}
                    {{--<li class="list-small-detail">นักพัฒนาระบบ นักพัฒนาเว็บไซต์</li>--}}

                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="header-big-detail">ค่าใช้จ่าย และ หน่วยกิตทั้งหมดที่ต้องเรียน</li>--}}
            {{--<li class="list-detail-all">--}}
                {{--<p class="header-small-detail">ค่าใช้จ่าย</p>--}}
                {{--<ul class="wrapper-small-detail">--}}
                    {{--<li class="list-small-detail">ประมาณ 20,000 บาทต่อเทอม</li>--}}

                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="list-detail-all">--}}
                {{--<p class="header-small-detail">หน่วยกิต</p>--}}
                {{--<ul class="wrapper-small-detail">--}}
                    {{--<li class="list-small-detail">ขั้นต่ำ 135 หน่วยกิต</li>--}}

                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="header-big-detail">รายละเอียดเพิ่มเติม</li>--}}
            {{--<li class="list-detail-all">--}}
                {{--<p class="header-small-detail">PDF</p>--}}
                {{--<ul class="wrapper-small-detail">--}}
                    {{--<li class="list-small-detail">--}}
                        {{--<button class="btn-download-pdf">--}}
                            {{--<img src="{{ URL::asset('image/download-white.svg') }}">--}}
                        {{--</button>--}}
                    {{--</li>--}}

                {{--</ul>--}}
            {{--</li>--}}
        {{--</ul>--}}


        {{--<div class="wrapper-header-title">--}}
            {{--<h1 class="header-title color-green">ภาควิชาคอมพิวเตอร์ คณะ วิทยาศาสตร์ มหาลัยศิลปากร</h1>--}}
            {{--<div class="line-header-title"></div>--}}
        {{--</div>--}}

        {{--<ul class="wrapper-detail-all">--}}
            {{--<li class="header-big-detail">ที่อยู่</li>--}}
            {{--<li class="list-detail-all">--}}
                {{--<p class="header-small-detail">ภาษาไทย</p>--}}
                {{--<ul class="wrapper-small-detail">--}}
                    {{--<li class="list-small-detail">คณะวิทยาศาสตร์, มหาลัยศิลปากร<br>--}}
                        {{--วิทยาเขต พระราชวังสนามจันทร์<br>--}}
                        {{--ถนน ราชมรรคาใน<br>--}}
                        {{--อำเภอ เมืองฯ<br>--}}
                        {{--จังหวัด นครปฐม<br>--}}
                        {{--73000</li>--}}

                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="list-detail-all">--}}
                {{--<p class="header-small-detail">ภาษาอังกฤษ</p>--}}
                {{--<ul class="wrapper-small-detail">--}}
                    {{--<li class="list-small-detail">Faculty of Science, Silpakorn University<br>--}}
                        {{--Sanam Chandra Palace Campus<br>--}}
                        {{--Rajamunka-nai Rd.<br>--}}
                        {{--Muang District<br>--}}
                        {{--Nakhon Pathom<br>--}}
                        {{--73000</li>--}}

                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="header-big-detail">โทรศัพท์</li>--}}
            {{--<li class="list-detail-all">--}}
                {{--<p class="header-small-detail">เบอร์ตรงภาควิชา</p>--}}
                {{--<ul class="wrapper-small-detail">--}}
                    {{--<li class="list-small-detail">0-3424-5334-5</li>--}}
                    {{--<li class="list-small-detail">0-3427-2923</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="list-detail-all">--}}
                {{--<p class="header-small-detail">เบอร์กลางคณะฯ</p>--}}
                {{--<ul class="wrapper-small-detail">--}}
                    {{--<li class="list-small-detail">0-3425-5093</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="header-big-detail">แผนที่</li>--}}
        {{--</ul>--}}
        {{--<div class="wrapper-header-title">--}}
            {{--<h1 class="header-title color-green">ภาควิชาคอมพิวเตอร์ คณะ วิทยาศาสตร์ มหาลัยศิลปากร</h1>--}}
            {{--<div class="line-header-title"></div>--}}
        {{--</div>--}}
        {{--<p class="description-history">ภาควิชาคอมพิวเตอร์ แต่เดิมมีฐานะเป็นสาขาวิชาวิทยาการคอมพิวเตอร์ซึ่งสังกัดอยู่ในภาควิชาคณิตศาสตร์ คณะวิทยาศาสตร์ มหาวิทยาลัยศิลปากร เนื่องจากเพื่อก่อให้เกิดเอกภาพและความคล่องตัวในการบริหารและดำเนินการต่างๆ ให้มีประสิทธิภาพมากยิ่งขึ้น จึงได้รับการอนุมัติให้จัดตั้งเป็นภาควิชาคอมพิวเตอร์ สังกัดคณะวิทยาศาสตร์ จากสภามหาวิทยาลัยศิลปากรตั้งแต่วันที่ 8 กันยายน 2547 ภาควิชาคอมพิวเตอร์ ดำเนินการจัดการเรียนการสอนในศาสตร์ทาง คอมพิวเตอร์และเทคโนโลยีสารสนเทศทั้งด้านฮาร์ดแวร์และซอฟต์แวร์ โดยมุ่งหวังที่จะผลิตบัณฑิตที่มีความรู้ความสามารถเพื่อประกอบอาชีพที่เกี่ยวข้อง กับคอมพิวเตอร์ในแขนงต่างๆ และสนองต่อความต้องการของประเทศชาติ ภาควิชาฯ ได้เริ่มเปิดสอนหลักสูตรวิทยาศาสตรบัณฑิต สาขาวิทยาการคอมพิวเตอร์ ในปีการศึกษา 2531 หลักสูตรวิทยาศาสตรมหาบัณฑิต สาขาวิทยาการคอมพิวเตอร์ ในปีการศึกษา 2545 หลักสูตรวิทยาศาสตรมหาบัณฑิต สาขาเทคโนโลยีสารสนเทศ ในปีการศึกษา 2547 และหลักสูตรวิทยาศาสตรบัณฑิต สาขาเทคโนโลยีสารสนเทศ ในปีการศึกษา 2548</p>--}}

        {{--<p class="not-found">ขออภัยค่ะ ไม่พบหน้านี้ในระบบ</p>--}}



        <div class="wrapper-header-title">
            <h1 class="header-title">หลักสูตร</h1>
            <div class="line-header-title"></div>
        </div>
        <ul class="wrapper-cand-all">
            <li class="list-wrapper-card-all">
                <a href="curricula/bachelor">
                    <div class="card-curricula">
                        <img src="{{ URL::asset('image/012-book-2.svg') }}" class="image-card-curricula">
                        <h3 class="type-card-curricula">ปริญญาตรี</h3>
                        <p class="detail-card-curricula">วิทยาการคอมพิวเตอร์<br>เทคโนโลยีสารสนเทศ</p>
                    </div>
                </a>
            </li>
            <li class="list-wrapper-card-all">
                <a href="curricula/master">
                    <div class="card-curricula">
                        <img src="{{ URL::asset('image/012-book-2.svg') }}" class="image-card-curricula">
                        <h3 class="type-card-curricula">ปริญญาโท</h3>
                        <p class="detail-card-curricula">เทคโนโลยีสารสนเทศ</p>
                    </div>
                </a>
            </li>
            <li class="list-wrapper-card-all">
                <a href="curricula/doctor">
                    <div class="card-curricula">
                        <img src="{{ URL::asset('image/012-book-2.svg') }}" class="image-card-curricula">
                        <h3 class="type-card-curricula">ปริญญาเอก</h3>
                        <p class="detail-card-curricula">เทคโนโลยีสารสนเทศ</p>
                    </div>
                </a>
            </li>
        </ul>



    </div>

@endsection



