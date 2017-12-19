@extends('main2')

@section('title', $curricula->name_th)

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
            <li class="list-nav"><a href="{{url("/curricula")}}">หลักสูตร</a></li>
            <li class="list-nav">
                <img src="{{ URL::asset('image/chevron-right-green.svg') }}" class="image-chevron-right-list-nav">
            </li>
            <li class="list-nav">
                @if($curricula->degree == 'Bachelor Degree')
                    <a href="{{url('curricula/bachelor')}}">ปริญญาตรี
                        @elseif($curricula->degree == 'Master Degree')
                            <a href="{{url('curricula/master')}}">ปริญญาโท
                                @else
                                    <a href="{{url('curricula/doctor')}}">ปริญญาเอก
                                        @endif
                                    </a>
            </li>
            <li class="list-nav">
                <img src="{{ URL::asset('image/chevron-right-green.svg') }}" class="image-chevron-right-list-nav">
            </li>
            <li class="list-nav">{{$curricula->name_th}}</li>
        </ul>

        <div class="wrapper-header-title">
            <h1 class="header-title">{{ $curricula->name_th }}</h1>
            <div class="line-header-title"></div>
        </div>

        <ul class="wrapper-detail-all">
            <li class="header-big-detail">ชื่อปริญญา</li>
                <li class="list-detail-all">
                    <p class="header-small-detail">ภาษาไทย</p>
                    <ul class="wrapper-small-detail">
                        <li class="list-small-detail">{{ $curricula->name_th }}</li>
                    </ul>
                </li>
                <li class="list-detail-all">
                    <p class="header-small-detail">ภาษาอังกฤษ</p>
                    <ul class="wrapper-small-detail">
                        <li class="list-small-detail">{{ $curricula->name_en }}</li>
                    </ul>
                </li>
                <li class="header-big-detail">ชื่อหลักสูตร</li>
                <li class="list-detail-all">
                    <p class="header-small-detail">ภาษาไทย</p>
                    <ul class="wrapper-small-detail">
                        <li class="list-small-detail">{{ $curricula->degree_name_th }}</li>
                    </ul>
                </li>
                <li class="list-detail-all">
                <p class="header-small-detail">ภาษาอังกฤษ</p>
                    <ul class="wrapper-small-detail">
                        <li class="list-small-detail">{{ $curricula->degree_name_en }}</li>
                    </ul>
                </li>
                <li class="header-big-detail">เกณท์การเข้าศึกษา และ เกณท์การสำเร็จการศึกษา</li>
                <li class="list-detail-all">
                    <p class="header-small-detail">เกณฑ์การเข้าศึกษา</p>
                    <ul class="wrapper-small-detail">
                        <li class="list-small-detail">{!! $curricula->enrollment_criteria !!}</li>
                    </ul>
                </li>
                <li class="list-detail-all">
                    <p class="header-small-detail">เกณฑ์การสำเร็จการศึกษา</p>
                    <ul class="wrapper-small-detail">
                        <li class="list-small-detail">{!! $curricula->graduation_criteria !!}</li>
                    </ul>
                </li>
                <li class="header-big-detail">ค่าใช้จ่าย และ หน่วยกิตทั้งหมดที่ต้องเรียน</li>
                <li class="list-detail-all">
                    <p class="header-small-detail">ค่าใช้จ่าย</p>
                    <ul class="wrapper-small-detail">
                        <li class="list-small-detail">ประมาณ {!! $curricula->cost !!} บาทต่อเทอม</li>
                    </ul>
                </li>
                <li class="list-detail-all">
                    <p class="header-small-detail">หน่วยกิต</p>
                    <ul class="wrapper-small-detail">
                        <li class="list-small-detail">ขั้นต่ำ {!! $curricula->credit !!} หน่วยกิต</li>
                    </ul>
                </li>
                <li class="header-big-detail">รายละเอียดเพิ่มเติม</li>
                <li class="list-detail-all">
                    <p class="header-small-detail">ดาวน์โหลดไฟล์ PDF</p>
                    <ul class="wrapper-small-detail">
                        <li class="list-small-detail">
                            <a href="{{ url('file/show/'.$curricula->file) }}">
                                <button class="btn-download-pdf"><img src="{{ URL::asset('image/download-white.svg') }}">
                                </button>
                            </a>
                        </li>
                    </ul>
                </li>
        </ul>
    </div>
@endsection