@extends('main')

@section('content')
    <div class="container">
        <div class="row col-md-12" style="background: #ffffff; text-align: center">
            <div class="well well-lg">
                <h1 style="padding: 2%">เอกสาร</h1>
            </div>
        </div>

        @foreach($categories as $category)
        <div class="row col-md-12" style="background: #ffffff">
            <div style="text-align: left">
                <h2 class="primary-section-heading">{{ $category }}</h2>
            </div>
            @foreach($documents[$category] as $document)
                @if($loop->iteration <= 4)
                @include('document._card')
                @endif
            @endforeach
            <div class="col-sm-12 col-md-12 text-right">
                <h4><a href="{{ url('document/category/'.$category) }}">เพิ่มเติม ></a></h4>
            </div>
        </div>
        @endforeach
    </div>
@endsection