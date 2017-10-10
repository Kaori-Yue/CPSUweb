@extends('main2')

@section('title', "ข่าวสาร")

@section('content')
    <h1 class="title">ข่าวล่าสุด
        <a href={{url("blog/category/latest-news")}} class="more-detail-title">ดูข่าวเพิ่มเติม</a>
    </h1>
        <ul class="wrapper-card-news">
            @foreach($blogs as $blog)
            <li>
                @include('blog._card2', $blog)
            </li>
            @endforeach
        </ul>
    <h1 class="title">ข่าวการแข่งขัน (หมวดหมู่)
        <a href="#" class="more-detail-title">ดูข่าวเพิ่มเติม</a>
    </h1>
    <ul class="wrapper-card-news">
        <li>
            <div class="card-news background-white">
                <ul class="container-card-news">
                    <li class="image-card-news">
                        <img src="original.png" />
                        <!--<img src="23.jpeg"/>-->
                    </li>
                    <li class="content-card-news">
                        <p class="time-create-news">2017-09-22 15:54:48</p>
                        <h1 class="title">การแข่งขัน NFC 2012 ลองดูนะครับ...</h1>
                        <p class="description-card-news">ได้รับรางวัลการแข่งขัน NSC ในปี 2012 รางวัลชนะเลิศการแข่งขัน ได้รับรางวัลการแข่งขัน NSC ในปี 2012....</p>
                    </li>

                </ul>
                <div class="detail-card-news">
                    <p class="create-by-card-news">โดย : ธนเดช พัดทอง</p>
                    <ul class="logos-share-card-news">
                        <li class="logo-share-card-news">
                            <img src="facebook.png" />
                            <p class="description-logo-share-card-news">Share Facebook</p>
                        </li>
                        <li class="logo-share-card-news">
                            <img src="twitter.png" />
                            <p class="description-logo-share-card-news">Share Twitter</p>
                        </li>
                    </ul>
                </div>
            </div>
        </li>

        <li>
            <div class="card-news background-white">
                <ul class="container-card-news">
                    <li class="image-card-news">
                        <img src="original.png" />
                        <!--<img src="23.jpeg"/>-->
                    </li>
                    <li class="content-card-news">
                        <p class="time-create-news">2017-09-22 15:54:48</p>
                        <h1 class="title">การแข่งขัน NFC 2012 ลองดูนะครับ...</h1>
                        <p class="description-card-news">ได้รับรางวัลการแข่งขัน NSC ในปี 2012 รางวัลชนะเลิศการแข่งขัน ได้รับรางวัลการแข่งขัน NSC ในปี 2012....</p>
                    </li>

                </ul>
                <div class="detail-card-news">
                    <p class="create-by-card-news">โดย : ธนเดช พัดทอง</p>
                    <ul class="logos-share-card-news">
                        <li class="logo-share-card-news">
                            <img src="{{URL::asset("image/facebook.png")}}" />
                            <p class="description-logo-share-card-news">Share Facebook</p>
                        </li>
                        <li class="logo-share-card-news">
                            <img src="twitter.png" />
                            <p class="description-logo-share-card-news">Share Twitter</p>
                        </li>
                    </ul>
                </div>
            </div>
        </li>
    </ul>

@endsection