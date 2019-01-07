{{-- COPY FORM TEACHER DETAIL --}}
@extends('main2')

@section('title', "บุคลากรสายวิชาการ")
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="stylesheet" href="{{ URL::asset('css/new_theme/research.css') }}" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
{{-- <link rel="stylesheet" href="{{ URL::asset('research-modal/css/bootstrap.min.css') }}"/> --}}
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


{{-- Flash Message --}}

@if(session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert" style="font-size:16px;width:100%;height:50px">
        <strong>Success! </strong>{{session('success')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="size:20px">
            <span aria-hidden="true">&times;</span>
        </button> 
    </div>
@endif



        <div class="card-read-person" style="font-weight: 100">
            <div style="display: flex"> {{-- CONTAINER --}}
                <div style="flex: 25%; background-color: #117167; border-radius: 50px 20px; padding: 15px; margin-bottom: 20px;  min-width: 220px"> {{-- LEFT IMAGE --}} 
                        <p class="name-th-card-read-person" style="text-align: center; color: #fff; margin-bottom: 5px; font-weight: 100">{{$teacher_read->name_th}}</p>
                        <img class="image-header-card-person" style="width: 100%" src="{{url('image/crop/'.$teacher_read->image)}}"/>
                        {{-- {{Auth::user()->id}}
                        {{$teacher_read->user_id}} --}}
                        {{-- {{ dd(Auth::user() )}} --}}
                        {{-- {{ dd( $teacher_read->expertise ) }} --}}

                        <br/>
                        <br/>
                                <p class="header-small-detail">สาขาที่เชี่ยวชาญ</p>
                                <ul class="wrapper-small-detail">
                                    @php
                                    $raw_expertises = $teacher_read->expertise;
                                    $expertises = explode("," , $raw_expertises);
                                    for($i = 0 ; $i < count($expertises) ; $i++){
                                        echo '<li class="list-small-detail" style="margin-left: 5px">'.$expertises[$i].'</li>';
                                    }
                                    @endphp
                                </ul>
                </div>

                <div style="flex: 75%"> {{-- RIGHT CONTNET --}}

                    
                     {{-- NAV BAR --}}


                <div style="margin: 70px 30px"> {{-- CONTENT --}}
                    <div class="panel-group" id="accordion">
                        @php
                            if(count ($researchs)) {
                                $arr = array();
                                foreach($researchs as $key => $item) {
                                    $arr[$item['publication']][$key] = $item;
                                }
                            }
                        @endphp
                        @if(isset($arr))
                            @foreach($arr as $key => $research)
                                @include('research.researchBox', ['researchs' => $research, 'year' => $key])
                            @endforeach
                        @else
                            ไม่มีผลงานวิจัย
                        @endif
                        {{-- @include('research.researchBox', ['research' => $arr]) --}}
                    </div>
                </div>
            </div>
        </div>
    
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


    {{-- @if(session('status')) --}}
    {{-- <div id="popup1" class="">
            <div class="popup">
                <h2>Here i am</h2>
                <a class="close" href="#">&times;</a>
                <div class="content">
                    Thank to pop me out of that button, but now i'm done so you can close this window.
                </div>
            </div>
    </div> --}}
    {{-- @endif --}}

    {{-- <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> --}}
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    {{-- <script type="text/javascript" src="{{URL::asset('research-modal/js/bootstrap.min.js')}}"></script> --}}
    <script type="text/javascript" src="{{URL::asset('js/research.js')}}"></script>
@endsection