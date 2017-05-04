@extends('main')

@section('content')
    <div class="container">
        {{--<div class="row row-card">

        </div>--}}

        <div class="row col-md-12" style="background: #ffffff">
            <div class="well well-lg">
                <h1>ผลงานวิจัย</h1>
            </div>
            @foreach($researches as $research)
                <a href="{{ url('research/'.$research->slug) }}" style="text-decoration: none">
                    <div class="col-md-4" style="padding: 1%">
                        <div class="well-lg" style="border: solid;border-radius: 0">
                            <h4>{{ $research->name }}</h4>
                            <hr>
                            <p>{{ substr($research->description, 0, 120) }}</p>
                        </div>
                    </div>
                </a>

            @endforeach
        </div>

    </div>
@stop