@extends('main2')

@section('title', "ข่าวสาร")

@section('content')
    {{--<ul class="wrapper-card-news">
                    @foreach($category->blogs as $blog)
                        <li>
                            @if($loop->iteration <= 4)
                                @include('blog._card2', $blog)
                            @endif
                        </li>
                    @endforeach
                </ul>--}}
    <div class="container-content">
        @foreach($categories as $category)
            <div class="wrapper-header-title">
                <a href={{url("blog/category/".$category->name)}} class="more-detail-title"><h1 class="header-title">{{$category->name}}</h1></a>
                <div class="line-header-title"></div>
            </div>
            @if(count($category->blogs) != 0)
                <ul class="wrapper-category-news">
                    @foreach($category->blogs as $blog)
                        @if($loop->iteration <= 2)
                            @include('blog._card2', $blog)
                        @endif
                    @endforeach
                    <li class="list-card-news-category">
                        <ul class="wrapper-card-news">
                            @foreach($category->blogs as $blog)
                                @if($loop->iteration > 2 && $loop->iteration <= 7)
                                    @include('blog._card3', $blog)
                                @endif
                            @endforeach
                                <li class="list-wrapper-card-news">
                                    <a class="watch-more-card-news" href="{{"blog/category/". $category->slug}}">ดูข่าวทั้งหมด</a>
                                </li>
                        </ul>
                    </li>
                </ul>
            @endif
        @endforeach
        <!--<div class="wrapper-header-title">
            <h1 class="header-title">ข่าวการแข่งขัน</h1>
            <div class="line-header-title"></div>
        </div>
        <ul class="wrapper-category-news">
            <li class="list-card-news-category">
                <div class="card-news-vertical">
                    <a>
                        <img class="image-card-news-vertical" src="{{ URL::asset('image/tesa-demo-web.svg') }}">
                    </a>
                    <a>
                        <h3 class="title-card-news-vertical">TESA ร่วมกับ ม.เทคโนโลยี่พระจอมเกล้าพระนครเหนือ และ กรมอุทยานแห่งชาติ สัตว์ป่า และ พันธุ์พืช</h3>
                    </a>
                    <p class="description-card-news-vertical">ค่ายฟรีที่น้องๆ จะได้เรียนรู้เเละพัฒนาผลงานจริง ผ่านคำเเเนะนำจากเหล่ากูรูผู้ก่อตั้งเว็บไซต์ ชื่อดังระดับประเทศ อาทิ Pantip, Dek-D, Wongnai, TARAD, lnwshop, iURBAN, MacThai...</p>
                    <div class="wrapper-time-create-card-news-vertical">
                        <img class="image-calendar-card-news-vertical" src="{{ URL::asset('image/calendar.svg') }}" />
                        <p class="time-create-card-news-vertical">13 พฤศจิกายน 2560</p>
                    </div>
                </div>
            </li>
            <li class="list-card-news-category">
                <div class="card-news-vertical">
                    <a>
                        <img class="image-card-news-vertical" src="{{ URL::asset('image/tesa-demo-web.svg') }}">
                    </a>
                    <a>
                        <h3 class="title-card-news-vertical">TESA ร่วมกับ ม.เทคโนโลยี่พระจอมเกล้าพระนครเหนือ และ กรมอุทยานแห่งชาติ สัตว์ป่า และ พันธุ์พืช</h3>
                    </a>
                    <p class="description-card-news-vertical">ค่ายฟรีที่น้องๆ จะได้เรียนรู้เเละพัฒนาผลงานจริง ผ่านคำเเเนะนำจากเหล่ากูรูผู้ก่อตั้งเว็บไซต์ ชื่อดังระดับประเทศ อาทิ Pantip, Dek-D, Wongnai, TARAD, lnwshop, iURBAN, MacThai...</p>
                    <div class="wrapper-time-create-card-news-vertical">
                        <img class="image-calendar-card-news-vertical" src="{{ URL::asset('image/calendar.svg') }}" />
                        <p class="time-create-card-news-vertical">13 พฤศจิกายน 2560</p>
                    </div>
                </div>
            </li>
            <li class="list-card-news-category">
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
                        <a class="watch-more-card-news">ดูข่าวทั้งหมด</a>
                    </li>
                </ul>
            </li>
        </ul>-->




    {{--@foreach($categories as $category)
        @if(count($category->blogs) != 0)
            <h1 class="title">{{$category->name}}
              <a href={{url("blog/category/".$category->name)}} class="more-detail-title">ดูข่าวเพิ่มเติม</a>
            </h1>
            <ul class="wrapper-card-news">
                @foreach($category->blogs as $blog)
                    <li>
                        @if($loop->iteration <= 4)
                        @include('blog._card2', $blog)
                        @endif
                    </li>
                @endforeach
            </ul>
        @endif
    @endforeach--}}
    </div>
@endsection