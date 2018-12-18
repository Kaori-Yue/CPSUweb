@extends('main2')

@section('title', "บุคลากรสายวิชาการ")
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
            <li class="list-nav"><a href="{{url("person")}}">บุคลากร</a></li>
            <li class="list-nav">
                <img src="{{ URL::asset('image/chevron-right-green.svg') }}" class="image-chevron-right-list-nav">
            </li>
            <li class="list-nav"><a href="{{url("teacher")}}">บุคลากรสายวิชาการ</a></li>
            <li class="list-nav">
                <img src="{{ URL::asset('image/chevron-right-green.svg') }}" class="image-chevron-right-list-nav">
            </li>
            <li class="list-nav">{{$teacher_read->name_th}}</li>
        </ul>
        <div class="wrapper-header-title">
            <h1 class="header-title">บุคลากรสายวิชาการ</h1>
            <div class="line-header-title"></div>
        </div>
        
        <div class="card-read-person">
            <div class="header-card-read-person">
                <img class="image-header-card-person" src="{{url('image/crop/'.$teacher_read->image)}}"/>
                <p class="role-card-read-person">
                    @if(str_contains($teacher_read->position, "") === true)
                        <span class="position-card-person">อาจารย์ประจำภาควิชา</span>
                    @else
                        <span class="position-card-person">{{$teacher_read->position}}</span>
                    @endif
                </p>
                <h3 class="name-th-card-read-person">{{$teacher_read->name_th}}</h3>
                <h3 class="name-eng-card-read-person">{{$teacher_read->name_en}}</h3>
            </div>

            <ul class="wrapper-detail-all">

                <li class="list-detail-all">
                    <p class="header-small-detail">ประวัติการศึกษา</p>
                    <ul class="wrapper-small-detail">
                        <li class="list-small-detail">{{$teacher_read->doctor_degree}}</li>
                        <li class="list-small-detail">{{$teacher_read->master_degree}}</li>
                        <li class="list-small-detail">{{$teacher_read->bachelor_degree}}</li>
                    </ul>
                </li>
                <li class="list-detail-all">
                    <p class="header-small-detail">สาขาที่เชี่ยวชาญ</p>
                    <ul class="wrapper-small-detail">
                        @php
                        $raw_expertises = $teacher_read->expertise;
                        $expertises = explode("," , $raw_expertises);
                        for($i = 0 ; $i < count($expertises) ; $i++){
                            echo '<li class="list-small-detail">'.$expertises[$i].'</li>';
                        }
                        @endphp

                    </ul>
                </li>
                <li class="list-detail-all">
                    <p class="header-small-detail">อีเมล</p>
                    <ul class="wrapper-small-detail">
                        @php
                            $raw_email = $teacher_read->email;
                            $emails = explode("," , $raw_email);
                            for($i = 0 ; $i < count($emails) ; $i++){
                            echo '<li class="list-small-detail">'.$emails[$i].'</li>';
                            }
                        @endphp
                    </ul>
                </li>
                <li class="list-detail-all">
                    <p class="header-small-detail">เว็บไซต์</p>
                    <ul class="wrapper-small-detail">
                        @php
                        $raw_website = $teacher_read->website;
                        $websites = explode("," , $raw_website);
                        for($i = 0 ; $i < count($websites) ; $i++){
                            echo '<li class="list-small-detail"><a href='.$websites[$i].' target="_blank">'.$websites[$i].'</a></li>';
                        }
                        @endphp


                    </ul>
                </li>

                <li class="list-detail-all">
                        <p class="header-small-detail">งานจิจัย</p>
                        <ul class="wrapper-small-detail">
                            
                            <li class="list-small-detail"><a href="/research/{{ $teacher_read->id }}" target="_blank">{{ URL::to('research/' . $teacher_read->id) }}    </a></li>
                            
                        </ul>
                    </li>
            </ul>
        </div>
        <div class="wrapper-header-title">
            <h1 class="header-title">บุคลากรสายวิชาการ</h1>
            <div class="wrapper-buttom-next-previous">
                <button class="button-previous" id="btn-prve-teacher">
                    <img src="{{ URL::asset('image/chevron-left.svg') }}">
                </button>
                <button class="button-next" id="btn-next-teacher">
                    <img src="{{ URL::asset('image/chevron-right.svg') }}">
                </button>
            </div>
            <div class="line-header-title"></div>
        </div>

        <ul class="wrapper-card-person-read-person owl-carousel-teachers owl-carousel" id="teachers">
            @foreach($teachers as $teacher)
                <li class="list-wrapper-card-person-read-person">
                    @include('teacher._card2', $teacher)
                </li>
            @endforeach

        </ul>
    </div>
@endsection