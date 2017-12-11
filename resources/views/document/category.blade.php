@extends('main2')

@section('title', $title)

@section('content')
    <div class="container-content">
        <div class="wrapper-header-title">
            <h1 class="header-title">{{$title}}</h1>
            <div class="line-header-title"></div>
        </div>
        <ul class="wrapper-cand-all">
            @foreach($documents as $document)
                <li class="list-wrapper-card-all">
                    @include('document._card2')
                </li>
            @endforeach
        </ul>
    </div>
@endsection