@extends('main2')

@section('title', "เอกสาร")

@section('content')
<div class="container-content">
    @foreach($categories as $category)
    <div class="wrapper-header-title">
        <h1 class="header-title">{{$category}}</h1>
        <div class="line-header-title"></div>
    </div>

    <ul class="wrapper-cand-all">
        @foreach($documents[$category] as $document)
            @if($loop->iteration <= 6)
                <li class="list-wrapper-card-all">
                    @include('document._card2')
                </li>
            @endif
        @endforeach
        <li class="last-list-wrapper-card-all">
            <a href="{{ url('document/category/'.$category) }}">ดูแบบฟอร์มเพิ่มเติม</a>
        </li>
    </ul>
    @endforeach
    
</div>
@endsection