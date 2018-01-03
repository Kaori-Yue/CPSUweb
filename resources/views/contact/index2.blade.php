@extends('main2')

@section('title', "ติดต่อภาควิชา")

@section('content')
<div class="container-content">
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
        <li class="list-nav">ติดต่อภาควิชา</li>
    </ul>
    <div class="wrapper-header-title">
        <h1 class="header-title ">ภาควิชาคอมพิวเตอร์ คณะ วิทยาศาสตร์ มหาวิทยาลัยศิลปากร</h1>
        <div class="line-header-title"></div>
    </div>

    <ul class="wrapper-detail-all">
        <li class="header-big-detail">ที่อยู่</li>
        <li class="list-detail-all">
            <p class="header-small-detail">ที่อยู่ภาษาไทย</p>
            <ul class="wrapper-small-detail">
                <li class="list-small-detail">คณะวิทยาศาสตร์, มหาวิทยาลัยศิลปากร<br>
                    วิทยาเขต พระราชวังสนามจันทร์<br>
                    ถนน ราชมรรคาใน<br>
                    อำเภอ เมืองฯ<br>
                    จังหวัด นครปฐม<br>
                    73000</li>

            </ul>
        </li>
        <li class="list-detail-all">
            <p class="header-small-detail">English Address</p>
            <ul class="wrapper-small-detail">
                <li class="list-small-detail">Faculty of Science, Silpakorn University<br>
                    Sanam Chandra Palace Campus<br>
                    Rajamunka-nai Rd.<br>
                    Muang District<br>
                    Nakhon Pathom<br>
                    73000</li>

            </ul>
        </li>
        <li class="header-big-detail">โทรศัพท์</li>
        <li class="list-detail-all">
            <p class="header-small-detail">เบอร์ตรงภาควิชา</p>
            <ul class="wrapper-small-detail">
                <li class="list-small-detail">0-3424-5334-5</li>
                <li class="list-small-detail">0-3427-2923</li>
            </ul>
        </li>
        <li class="list-detail-all">
            <p class="header-small-detail">เบอร์กลางคณะฯ</p>
            <ul class="wrapper-small-detail">
                <li class="list-small-detail">0-3425-5093</li>
            </ul>
        </li>
        <li class="header-big-detail">แผนที่</li>
        <div class="google-maps" style="width: 100%; position: relative">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3874.327430244856!2d100.03898761495437!3d13.81936679030376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e2e5cbe1eb3a3d%3A0x10d91d1f54fe92b3!2z4LiE4LiT4Liw4Lin4Li04LiX4Lii4Liy4Lio4Liy4Liq4LiV4Lij4LmMIOC4oeC4q-C4suC4p-C4tOC4l-C4ouC4suC4peC4seC4ouC4qOC4tOC4peC4m-C4suC4geC4ow!5e0!3m2!1sth!2sth!4v1491660015801" height="400" width="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </ul>
</div>

@endsection