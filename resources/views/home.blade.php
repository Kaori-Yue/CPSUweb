@extends('main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="welcome-card col-md-12 col-xs-12" style="/*border: solid #ff0000*/">
                <div class="jumbotron col-md-6 col-xs-12" style="color: #ffffff;/*border: solid #00ff00*/">
                    <h1>ภาควิชาคอมพิวเตอร์</h1>
                    <h2>คณะวิทยาศาสตร์</h2>
                    <h3>มหาวิทยาลัยศิลปากร</h3>
                    <br>
                    <div class="btn btn-warning btn-lg">
                        ติดต่อ
                    </div>
                </div>

                <div class="col-md-6 col-xs-12" style="text-align: center;/*border: solid #00ff00;*/">
                    <img src="{{ URL::asset('image/white-atom.png') }}" alt="department logo">
                </div>
            </div>
        </div>

        <div class="row row-card col-md-12 col-xs-12">
            <div class="col-md-12">
                <h2>ข่าวประชาสัมพันธ์</h2>
            </div>
            <div class="col-md-12">
                @foreach($blogs as $blog)
                    <div class="card card-bg col-md-6 col-xs-12" style="background-image: url('{{ url('image/show/'.$blog->cover) }}')">
                        <h2><span>{!! $blog->title !!}</span></h2>
                        <br>
                        <p><span>By {!! $blog->user->name !!}</span></p>
                    </div>
                @endforeach
            </div>
            <div class="col-md-12" style="text-align: right">
                <a href="{{ url('blog') }}"><h4>ดูข่าวทั้งหมด ></h4></a>
            </div>
        </div>

        <div class="row row-card col-md-12 col-xs-12">
            <div class="col-md-12">
                <h2>ข่าวสารภาควิชา</h2>
            </div>
            <div class="col-md-12">
                @foreach($blogs as $blog)
                <div class="card card-bg col-md-4 col-xs-12" style="background-image: url('{{ url('image/show/'.$blog->cover) }}')">
                    <h2><span>{!! $blog->title !!}</span></h2>
                    <br>
                    <p><span>By {!! $blog->user->name !!}</span></p>
                </div>
                @endforeach
            </div>
            <div class="col-md-12" style="text-align: right">
                <a href="{{ url('blog') }}"><h4>ดูข่าวทั้งหมด ></h4></a>
            </div>
        </div>

        <div class="row row-card col-md-12 col-xs-12">
            {{--<div class="some-space col-md-12"></div>--}}
            <div class="col-md-2">
                <img src="{{ URL::asset('image/FindUsOnFacebook.png') }}" alt="">
            </div>
            <div class="col-md-2">
                {{--<img src="{{ URL::asset('image/ITPE2.jpg') }}" alt="">--}}
            </div>
            <div class="col-md-4">
                <img src="{{ URL::asset('image/NLC11.png') }}" alt="">
            </div>
            <div class="col-md-2">
                <img src="{{ URL::asset('image/msdn_aa.png') }}" alt="">
            </div>
            <div class="col-md-2">
                <img src="{{ URL::asset('image/nsc_logo.jpg') }}" alt="">
            </div>
            {{--<div class="some-space col-md-12"></div>--}}
        </div>

        <div class="row"></div>
    </div>
@stop