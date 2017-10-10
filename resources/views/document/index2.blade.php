@extends('main2')

@section('title', "เอกสาร")

@section('content')
<div class="container">
    @foreach($categories as $category)
        <h1 class="title">{{$category}}
            <a href="{{ url('document/category/'.$category) }}" class="more-detail-title">ดูเพิ่มเติม ></a>
        </h1>
        <ul class="wrapper-card-document">
            @foreach($documents[$category] as $document)
            <li>
                @if($loop->iteration <= 6)
                @include('document._card2')
                @endif
            </li>
            @endforeach
        </ul>

    @endforeach
</div>
@endsection