@extends('main2')

@section('content')
    <div class="container-content">
            <div class="wrapper-header-title">
                <h1 class="header-title">ข่าวประชาสัมพันธ์</h1>
                <div class="line-header-title"></div>
            </div>
            <ul class="wrapper-cand-all">
                <li class="list-wrapper-card-all">
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
                <li class="list-wrapper-card-all">
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
                <li class="list-wrapper-card-all">
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
                <li class="list-wrapper-card-all">
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
            </ul>
            <h1 class="title">{{ $title }}</h1>
            <ul class="wrapper-card-news">
                @foreach($blogs as $blog)
                <li>
                    @include('blog._card2', $blog)
                </li>
                @endforeach

            </ul>
            <script>
                $(document).ready(function(){
                    $('[data-toggle="tooltip"]').tooltip();
                });
            </script>
        <div class="row col-md-12 col-xs-12" style="text-align: center;">
            {{ $blogs->links() }}
        </div>
    </div>
@endsection

@section('script')
    <script async src="{{ URL::asset('js/fb.js') }}"></script>
@endsection