@extends('main2')

@section('title', $title)

@section('content')
    <div class="container">
        <h1 class="title">{{$title}}</h1>
        <ul class="wrapper-card-document">
            @foreach($documents as $document)
                <li>
                    @include('document._card2')
                </li>
            @endforeach
        </ul>
    </div>
@endsection