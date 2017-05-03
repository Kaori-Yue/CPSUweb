@extends('main')

@section('content')
    <div class="container">
        <div class="row row-card">
            <div class="well well-lg">
                <h1>ผลงานวิจัย</h1>
            </div>
        </div>

        @foreach($researches as $research)
            <div class="row row-card col-md-6">
                <div class="well-lg">
                <h4>{{ $research->name }}</h4>
                </div>
            </div>
        @endforeach
    </div>
@stop