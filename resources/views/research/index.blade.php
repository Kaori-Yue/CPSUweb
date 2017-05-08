@extends('main')

@section('content')

    <div class="container">
        <div class="row col-md-12" style="background: #ffffff;text-align: center">
            <div class="well well-lg">
                <h1 style="padding: 1%">ผลงานวิจัย</h1>
            </div>
        </div>
        <div class="row col-md-12">
            @foreach($researches as $research)
                @include('research._card', $research)
            @endforeach
        </div>
    </div>
@stop