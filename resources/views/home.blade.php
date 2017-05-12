@extends('main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="welcome-card col-md-12 col-xs-12" style="/*border: solid #ff0000*/">
                <div class="col-md-6 col-xs-12" style="text-align: center;/*border: solid #00ff00;*/">
                    <img src="{{ URL::asset('image/white-atom.png') }}" alt="department logo">
                </div>
                <div class="jumbotron col-md-6 col-xs-12" style="color: #ffffff;text-align: right/*border: solid #00ff00*/">
                    <h1>ภาควิชาคอมพิวเตอร์</h1>
                    <h2>คณะวิทยาศาสตร์</h2>
                    <h3>มหาวิทยาลัยศิลปากร</h3>
                    <br>
                    <a href="{{ url('contact') }}" class="btn btn-warning btn-lg">
                        ติดต่อ
                    </a>
                </div>
            </div>
        </div>

        <div class="row row-card col-md-12 col-xs-12">
            <div class="col-md-12">
                <h2>ข่าวประชาสัมพันธ์</h2>
            </div>
            <div class="col-md-12">
                @foreach($blogs as $blog)
                    @include('blog._card', $blog)
                @endforeach
            </div>
            <div class="col-md-12" style="text-align: right">
                <a href="{{ url('blog') }}"><h4>ดูข่าวทั้งหมด ></h4></a>
            </div>
        </div>

        <div class="row row-card col-md-12 col-xs-12">
            <div class="col-md-12">
                <h2>ประกาศ</h2>
            </div>
            <div class="col-md-12">
                @foreach($blogs as $blog)
                    @include('blog._card', $blog)
                @endforeach
            </div>
            <div class="col-md-12" style="text-align: right">
                <a href="{{ url('blog') }}"><h4>ดูข่าวทั้งหมด ></h4></a>
            </div>
        </div>

        <div class="row row-card col-md-12 col-xs-12" style="padding: 1%">
            {{--<div class="some-space col-md-12"></div>--}}
            <div class="col-md-2 col-xs-6">
                <img src="{{ URL::asset('image/FindUsOnFacebook.png') }}" alt="" class="img-responsive">
            </div>
            <div class="col-md-2 col-xs-6">
                <img src="{{ URL::asset('image/ITPE2.jpg') }}" alt="" class="img-responsive">
            </div>
            <div class="col-md-4 col-xs-12">
                <img src="{{ URL::asset('image/NLC11.png') }}" alt="" class="img-responsive">
            </div>
            <div class="col-md-2 col-xs-6">
                <img src="{{ URL::asset('image/msdn_aa.png') }}" alt="" class="img-responsive">
            </div>
            <div class="col-md-2 col-xs-6">
                <img src="{{ URL::asset('image/nsc_logo.jpg') }}" alt="" class="img-responsive">
            </div>
            {{--<div class="some-space col-md-12"></div>--}}
        </div>
    </div>
@stop