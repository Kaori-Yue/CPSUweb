@extends('main2')

@section('title', "หลักสูตร")

@section('content')
<div class="container-content">
    <ul class="wrapper-nav">
        <li class="list-nav">
            <img src="{{ URL::asset('image/home-nav.svg') }}" class="image-home-list-nav">
        </li>
        <li class="list-nav">
            <img src="{{ URL::asset('image/chevron-right-green.svg') }}" class="image-chevron-right-list-nav">
        </li>
            <li class="list-nav"><a href="../">หน้าแรก</a></li>
        <li class="list-nav">
            <img src="{{ URL::asset('image/chevron-right-green.svg') }}" class="image-chevron-right-list-nav">
        </li>
        <li class="list-nav">หลักสูตร</li>
    </ul>
    <ul class="wrapper-cand-all">
        <li class="list-wrapper-card-all">
            <a href="curricula/bachelor">
                <div class="card-curricula">
                    <img src="{{ URL::asset('image/curricula.svg') }}" class="image-card-curricula">
                    <h3 class="type-card-curricula">ปริญญาตรี</h3>
                    <p class="detail-card-curricula">วิทยาการคอมพิวเตอร์<br>เทคโนโลยีสารสนเทศ</p>
                </div>
            </a>
        </li>
        <li class="list-wrapper-card-all">
            <a href="curricula/master">
                <div class="card-curricula">
                    <img src="{{ URL::asset('image/curricula.svg') }}" class="image-card-curricula">
                    <h3 class="type-card-curricula">ปริญญาโท</h3>
                    <p class="detail-card-curricula">เทคโนโลยีสารสนเทศ</p>
                </div>
            </a>
        </li>
        <li class="list-wrapper-card-all">
            <a href="curricula/doctor">
                <div class="card-curricula">
                    <img src="{{ URL::asset('image/curricula.svg') }}" class="image-card-curricula">
                    <h3 class="type-card-curricula">ปริญญาเอก</h3>
                    <p class="detail-card-curricula">เทคโนโลยีสารสนเทศ</p>
                </div>
            </a>
        </li>
    </ul>

</div>
@endsection