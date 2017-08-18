@extends('main')

@section('content')
    <div class="container">
        <div class="row col-md-12 col-xs-12" style="background: #ffffff">
            <h2 class="primary-section-heading">{{ $title }}</h2>
            @foreach($documents as $document)
                @include('document._card', $document)
            @endforeach
        </div>
    </div>
@endsection