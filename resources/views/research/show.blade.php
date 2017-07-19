@extends('main')

@section('content')
    <div style="background: rgba(130,109,64,0.4)">
        <div class="container">
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading" style="padding: 3%">
                        <img src="{{ URL::asset('image/SC-SU-Formal-TH_resize.png') }}" width="100">
                        <h1>{!! $research->name !!}</h1>
                    </div>
                    <div class="panel-body" style="text-align: center;padding: 5%; font-family: 'Trirong', serif;font-size: 18px">
                        <p style="/*text-indent: 50px;*/ line-height: 2.0">{{ $research->description }}</p>
                    </div>
                </div>
            </div>


            @foreach($research->images as $image)
                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2>{{ $image->pivot->name }}</h2>
                        </div>
                        <div class="panel-body">
                            @if($loop->index % 2 == 0)
                                <div class="col-md-6" style="padding: 1%">
                                    <img src="{{ url('image/show/'.$image->id) }}" class="img-responsive" alt="{{ $image->pivot->name }}" style="padding: 1%">
                                </div>
                                <div class="col-md-6" style="padding: 1%;font-family: 'Trirong', serif">
                                    <blockquote class="blockquote-reverse">
                                        <p>{!! $image->pivot->description !!}</p>
                                    </blockquote>
                                </div>
                            @else
                                <div class="col-md-6" style="padding: 1%;font-family: 'Trirong', serif">
                                    <blockquote>
                                        <p>{!! $image->pivot->description !!}</p>
                                    </blockquote>
                                </div>
                                <div class="col-md-6" style="padding: 1%">
                                    <img src="{{ url('image/show/'.$image->id) }}" class="img-responsive" alt="{{ $image->pivot->name }}" style="padding: 1%">
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach

            @if($research->file != null)
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>รายละเอียดงานวิจัย</h3>
                    </div>
                    <div class="panel-body" style="text-align: center">
                        <p>
                            <a target="_blank" class="btn btn-warning btn-lg" href="{{ url('file/show/'.$research->file) }}">
                                ดาวน์โหลด
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
@endsection