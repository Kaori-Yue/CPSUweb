@extends('main')

@section('content')
    <div class="row col-md-12 col-xs-12" style="background: #0375b4;">
        <div class="container" style="/*border: solid #ff0000*/">
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
@stop