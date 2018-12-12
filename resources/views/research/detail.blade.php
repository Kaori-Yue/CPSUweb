{{-- COPY FORM TEACHER DETAIL --}}
@extends('main2')

@section('title', "บุคลากรสายวิชาการ")
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ URL::asset('css/new_theme/research.css') }}" />
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
			<li class="list-nav"><a href="{{url("teacher/$teacher_read->id")}}">{{$teacher_read->name_th}}</a></li>
			{{-- EDIT NAV BAR --}}
			<li class="list-nav">
					<img src="{{ URL::asset('image/chevron-right-green.svg') }}" class="image-chevron-right-list-nav">
			</li>
			<li class="list-nav">ผลงานวิจัย</li>
			{{-- END NAR BAR --}}
        </ul>
        <div class="wrapper-header-title">
            <h1 class="header-title">บุคลากรสายวิชาการ</h1>
            <div class="line-header-title"></div>
        </div>


{{--  --}}

{{-- @if (isAdmin("9"))
        <style>
            body { background: #333}
            </style>
@endif --}}
{{-- {{ dd(Auth::user()) }} --}}
{{-- {{ dd(Auth::user()->id) }} --}}
{{-- {{ dd( $teacher_read ) }} --}}

{{-- @if (Auth::check() && Auth::user()->id == $teacher_read->user_id + 1)
<style>
        body { background: #333}
        </style>
@endif --}}

        <div class="card-read-person" style="font-weight: 100">
            <div style="display: flex"> {{-- CONTAINER --}}
                <div style="flex: 25%; background-color: #117167; border-radius: 50px 20px; padding: 15px; margin-bottom: 20px;  min-width: 220px"> {{-- LEFT IMAGE --}} 
                        <p class="name-th-card-read-person" style="text-align: center; color: #fff; margin-bottom: 5px; font-weight: 100">{{$teacher_read->name_th}}</p>
                        <img class="image-header-card-person" style="width: 100%" src="{{url('image/crop/'.$teacher_read->image)}}"/>
                        {{-- {{Auth::user()->id}}
                        {{$teacher_read->user_id}} --}}
                        <div style="color: #fff"> {{-- HACK COLOR --}}
                        <br />
                        {{-- <span>Research Area</span>
                        <br />
                        Artificial Intelligence 
                        <br />
                        Natural Language Processing 
                        <br />
                        Deep Learning 
                        <br />
                        Network Security 
                        <br /> --}}
                        </div>
                </div>
            
                <div style="flex: 75%"> {{-- RIGHT CONTNET --}}
                    <div style="float: right"> {{-- NAV BAR --}}
                        <div class="dropdown">
                            <button onclick="myFunction()" class="dropbtn">RECENT POST</button>
                                <div id="myDropdown" class="dropdown-content">
                                        <a href="#" onclick="sortTable('asc')" style="font-size: 16px">เรื่องล่าสุด</a>
                                        <a href="#" onclick="sortTable('desc')" style="font-size: 16px">เรื่องเก่า</a>
                                </div>
                        </div>
                        @if (Auth::check() && Auth::user()->id == $teacher_read->user_id + 1)
                            <button type="button" class="button" style="margin: 0px 5px; padding: 10px; background: #3498DB" id="addContainer">ADD RESEARCH</button>
                        @endif
                    </div>
                <div style="margin: 70px 30px"> {{-- CONTENT --}}
                    <table id="reseach_container"> 
                        @if(count ($researchs)) {{-- << ARRAY --}}
                            @foreach($researchs as $research)
                                    @include('research.researchBox', ['research' => $research])
                            @endforeach
                        @else
                            ไม่มีข้อมูลงานวิจัย
                        @endif
                    </table>
                </div>
            </div>
        </div>
    
    </div>


		{{-- START --}}
        {{-- <div class="card-read-person">
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
            </ul>
        </div> --}}
        
		{{-- END --}}
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

    <script src="{{URL::asset('js/research.js')}}"></script>
@endsection