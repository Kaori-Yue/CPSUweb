@extends('main')

@section('content')
    <div class="container">
        <div class="row row-card" style="text-align: center">
            <h2>{{ $research->name }}</h2>
        </div>

        <div class="row row-card" style="text-align: center;padding: 10%">
            <p>{{ $research->description }}</p>
        </div>

        @foreach($research->images as $image)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>{{ $image->pivot->name }}</h3>
                </div>
                <div class="panel-body">
                    @if($loop->index % 2 == 0)
                        <div class="col-md-6">
                            <img src="{{ url('image/show/'.$image->id) }}" class="img-responsive" alt="{{ $image->pivot->name }}" style="padding: 1%">
                        </div>
                        <div class="col-md-6">
                            <p>{{ $image->pivot->description }}</p>
                        </div>
                    @else
                        <div class="col-md-6">
                            <p>{{ $image->pivot->description }}</p>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ url('image/show/'.$image->id) }}" class="img-responsive" alt="{{ $image->pivot->name }}" style="padding: 1%">
                        </div>
                    @endif
                </div>
            </div>

            {{--<div class="row row-card" style="text-align: left">
                <h3>{{ $image->pivot->name }}</h3>
            </div>
            <div class="row row-card" style="text-align: center;padding: 1%">
                <div class="col-md-6">
                    <img src="{{ url('image/show/'.$image->id) }}" alt="">
                </div>
                <div class="col-md-6">
                    <p>{{ $image->pivot->description }}</p>
                </div>
            </div>--}}
        @endforeach

    </div>


@stop