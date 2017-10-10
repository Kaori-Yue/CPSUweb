@extends('main2')

@section('title', "ข่าวสาร")

@section('content')
    <div class="container">
    @foreach($categories as $category)
        @if(count($category->blogs) != 0)
            <h1 class="title">{{$category->name}}
              <a href={{url("blog/category/".$category->name)}} class="more-detail-title">ดูข่าวเพิ่มเติม</a>
            </h1>
            <ul class="wrapper-card-news">
                @foreach($category->blogs as $blog)
                    <li>
                        @if($loop->iteration <= 4)
                        @include('blog._card2', $blog)
                        @endif
                    </li>
                @endforeach
            </ul>
        @endif
    @endforeach
    </div>
@endsection