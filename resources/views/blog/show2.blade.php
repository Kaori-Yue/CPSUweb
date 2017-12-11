@extends('main2')

@section('title', $blog->title)

@section('meta')
    <meta property="og:title"  content="{{$blog->title}}" />
    <meta property="og:type" content="article">
    <meta property="og:description" content="{{$blog->description}}">
    <meta property="og:locale" content="th_TH">
    <meta property="og:image" content="{{ url('image/show/'.$blog->cover) }}">
    <meta property="og:url" content="{{ 'http://202.28.72.71/blog/'.$blog->slug }}">

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="{{ $blog->title }}" />
    <meta name="twitter:description" content="{{$blog->description}}" />
    <meta name="twitter:image" content="{{ url('image/show/'.$blog->cover) }}" />
@endsection

@section('content')
<div class="container-content">
    <ul class="wrapper-read-news">
        <li class="list-wrapper-read-news">
            <div class="wrapper-header-title">
                <h1 class="header-title">การแข่งขัน NFC 2012</h1>
            </div>
            <div class="wrapper-time-create-card-news-vertical">
                <img class="image-calendar-card-news-vertical" src="{{ URL::asset('image/calendar.svg') }}" />
                <p class="time-create-card-news-vertical">13 พฤศจิกายน 2560</p>
            </div>
            <img src="{{ URL::asset('image/tesa-demo-web.svg') }}" class="image-read-news">
            <p class="description-read-news">พิธีมอบทุนและทำสัญญารับทุน
                การแข่งขันพัฒนาโปรแกรมคอมพิวเตอร์
                แห่งประเทศไทยครั้งที่ 20 – NSC2018
                วันพฤหัสบดีที่ 23 พฤศจิกายน 2560
                เวลา 12.30 - 16.30 น.
                ณ ห้อง ร.วท.1 อาคารเรียนรวมวิทยาศาสตร์

                เอกสารที่ใช้การทำสัญญาและเบิกจ่ายทุน
                1. ข้อตกลงการรับทุนที่สั่งพิมพ์ลงบนกระดาษ A4 เพียง 1 หน้าเท่านั้น จำนวน 2 ชุด ที่มีตราเนคเทค โดยหัวหน้าโครงงานและอาจารย์ที่ปรึกษาเท่านั้น!!! ลงนามครบทั้ง 2 ชุด กรณีนักพัฒนาอายุน้อยกว่า 15 ปี บริบูรณ์นับถึงวันที่ 1 ตุลาคม 2560 ให้ผู้ปกครองลงนามในฐานะผู้แทนโดยชอบธรรมเพิ่มเติมด้วย

                2. สำเนาบัตรประจำตัว ที่ลงนามสำเนาถูกต้องและยังไม่หมดอายุของหัวหน้าโครงงานเท่านั้น!!! และผู้ปกครอง (กรณีผู้พัฒนาอายุน้อยกว่า 15 ปี) กรณีที่ผู้พัฒนาไม่มีบัตรประชาชน ให้ใช้สำเนาบัตรนักเรียนแทน

                3. ใบสำคัญรับเงินที่กรอกรายละเอียดครบถ้วน พร้อมลงนามรับเงินโดยหัวหน้าโครงงานเท่านั้น!!!

                4. ในกรณีที่หัวหน้าโครงงานไม่สามารถมารับทุนได้ด้วยตนเอง ให้ทำหนังสือมอบอำนาจลงนามโดยหัวหน้าโครงงาน พร้อมสำเนาบัตรประชาชน หรือบัตรประจำตัวของผู้รับมอบอำนาจ ทั้งนี้การดำเนินการในเอกสารในข้อที่ 1 - 3 ยังต้องเป็นเพียงหัวหน้าโครงการเท่านั้นที่ลงนามไว้ครบถ้วน ลายเซ็นครบตรงกันทุกเอกสาร แต่ในกรณีนี้ได้มอบอำนาจให้คนอื่นนำเอกสารทั้งหมดมารับเงินทุนแทน</p>
            <ul class="wrapper-btn-share">
                <li class="list-btn-share">
                    <button class="btn-square btn-share-facebook" id="shareToFB{{$blog->id}}">Share Facebook</button>
                </li>
                <li class="list-btn-share">
                    <button class="btn-square btn-share-twitter" id="shareToTW{{$blog->id}}">Share Twitter</button>
                </li>
            </ul>
        </li>
        <li class="list-wrapper-read-news">
            <div class="wrapper-header-title">
                <h1 class="header-title">ข่าวประชาสัมพันธ์</h1>
                <div class="line-header-title"></div>
            </div>
            <ul class="wrapper-card-news">
                <li class="list-wrapper-card-news">
                    <div class="card-news-horizontal">
                        <a>
                            <img class="image-card-news-horizontal" src="{{ URL::asset('image/tesa-demo-web.svg') }}">
                        </a>
                        <a>
                            <h3 class="title-card-news-horizontal">TESA ร่วมกับ ม.เทคโนโลยี่พระจอมเกล้าพระนครเหนือ และ กรมอุทยานแห่งชาติ...</h3>
                        </a>
                    </div>
                </li>
                <li class="list-wrapper-card-news">
                    <div class="card-news-horizontal">
                        <a>
                            <img class="image-card-news-horizontal" src="{{ URL::asset('image/tesa-demo-web.svg') }}">
                        </a>
                        <a>
                            <h3 class="title-card-news-horizontal">TESA ร่วมกับ ม.เทคโนโลยี่พระจอมเกล้าพระนครเหนือ และ กรมอุทยานแห่งชาติ...</h3>
                        </a>
                    </div>
                </li>
            </ul>
        </li>
    </ul>
</div>


    <div class="form-read-news">
        <div class="header-form-read-news">
            <div class="container">
                <ul class="logos-share-card-news">
                    <li class="logo-share-card-news" id="shareToFB{{$blog->id}}">
                        <img src="{{ URL::asset('image/facebook_white.png') }}" />
                        <p class="description-logo-share-card-news">Share Facebook</p>
                    </li>
                    <li class="logo-share-card-news" id="shareToTW{{$blog->id}}">
                        <img src="{{ URL::asset('image/twitter_white.png') }}" />
                        <p class="description-logo-share-card-news">Share Twitter</p>
                    </li>
                </ul>
                <p class="category-header-form-read-news">ข่าวสาร / การแข่งขัน</p>
                <h1 class="title">{{$blog->title}}</h1>
                <p class="create-by-form-read-news">
                    โดย : {{$blog->user->name}}
                    <span class="time-create-form-read-news">{{$blog->publish_at}}</span>
                </p>
            </div>
        </div>

        <div class="content-form-read-news">
            <div class="container">
                <div class="zone-read-content-form-read-news">
                    <img class="image-first-news" src="{{url('image/show/'.$blog->cover) }}}}">
                    <div class="zone-content-form-read-news">
                        {!! $blog->content !!}
                    </div>
                </div>
                <h1 class="title">ข่าวที่เกี่ยวข้อง</h1>
                <ul class="wrapper-card-news">
                    @foreach($relateBlogs as $blog_r)
                    <li>
                            @include('blog._card3', $blog_r)
                    </li>
                    @endforeach

                </ul>

            </div>
        </div>
    </div>
    <script>
        document.getElementById('shareToFB{{$blog->id}}').onclick = function() {
            FB.ui({
                method: 'share',
                display: 'popup',
                href: '{{ 'http://202.28.72.71/blog/'.$blog->slug }}',
            }, function(response){});
        };

        document.getElementById('shareToTW{{$blog->id}}').onclick = function() {
            var url = "{{ 'http://202.28.72.71/blog/'.$blog->slug }}";
            var text = "{{ $blog->title }}";
            window.open('http://twitter.com/share?url=' + encodeURIComponent(url) + '&text=' + encodeURIComponent(text), '', 'left=0,top=0,width=550,height=450,personalbar=0,toolbar=0,scrollbars=0,resizable=0');
        };
    </script>
@endsection

