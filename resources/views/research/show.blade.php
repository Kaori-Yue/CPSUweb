@extends('main')

@section('content')
    <div class="container">
        <div class="row" style="text-align: center">
            <h1 class="bg-primary" style="padding: 5%">
                {{ $research->name }}
            </h1>
        </div>

        <div class="row row-card" style="text-align: center;padding: 5%; font-family: 'Trirong', serif;">
            <p style="/*text-indent: 50px;*/ line-height: 2.0">{{ $research->description }}</p>
        </div>

        @foreach($research->images as $image)
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h2>{{ $image->pivot->name }}</h2>
                </div>
                <div class="panel-body">
                    @if($loop->index % 2 == 0)
                        <div class="col-md-6">
                            <img src="{{ url('image/show/'.$image->id) }}" class="img-responsive" alt="{{ $image->pivot->name }}" style="padding: 1%">
                        </div>
                        <div class="col-md-6">
                            <blockquote class="blockquote-reverse">
                                <p>{!! $image->pivot->description !!}</p>
                                {{--<footer>From WWF's website</footer>--}}
                            </blockquote>
                        </div>
                    @else
                        <div class="col-md-6">
                            <blockquote>
                                <p>{!! $image->pivot->description !!}</p>
                                {{--<footer>From WWF's website</footer>--}}
                            </blockquote>
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

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3>รายละเอียดงานวิจัย</h3>
            </div>
            <div class="panel-body" style="text-align: center">
                <p>
                    <a target="_blank" class="btn btn-warning btn-lg" href="{{ url('file/show/'.$research->file_id) }}">
                        ดาวน์โหลด
                    </a>
                </p>
            </div>
        </div>
    </div>


@stop