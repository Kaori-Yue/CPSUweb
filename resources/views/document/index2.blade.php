@extends('main2')

@section('title', "เอกสาร")

@section('content')
<div class="container">
    @foreach($categories as $category)
        <h1 class="title">{{$category}}</h1>
        <ul class="wrapper-card-document">
            @foreach($documents[$category] as $document)
            <li>
                @if($loop->iteration <= 6)
                @include('document._card2')
                @endif
            </li>
            @endforeach
        </ul>
        <div class="col-sm-12 col-md-12 text-right">
            <h4 style="float: right"><a href="{{ url('document/category/'.$category) }}">เพิ่มเติม ></a></h4><br>
        </div>
    @endforeach
</div>
@endsection