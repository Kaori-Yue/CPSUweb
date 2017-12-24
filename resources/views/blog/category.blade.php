@extends('main2')

@section('content')
    <div class="container-content">
        <ul class="wrapper-nav">
            <li class="list-nav">
                <a href="{{url("")}}">
                    <img src="{{ URL::asset('image/home-nav.svg') }}" class="image-home-list-nav">
                </a>
            </li>
            <li class="list-nav">
                <img src="{{ URL::asset('image/chevron-right-green.svg') }}" class="image-chevron-right-list-nav">
            </li>
            <li class="list-nav"><a href={{url("news")}}>ข่าวสาร</a></li>
            <li class="list-nav">
                <img src="{{ URL::asset('image/chevron-right-green.svg') }}" class="image-chevron-right-list-nav">
            </li>
            <li class="list-nav">{{$title}}</li>

        </ul>

            <div class="wrapper-header-title">
                <h1 class="header-title">{{$title}}</h1>
                <div class="line-header-title"></div>
            </div>
            <ul class="wrapper-cand-all">
                @foreach($blogs as $blog)
                    @include('blog._card5', $blog)
                @endforeach
            </ul>
            <script>
                $(document).ready(function(){
                    $('[data-toggle="tooltip"]').tooltip();
                });
            </script>
        <div class="row col-md-12 col-xs-12" style="text-align: center;">
            {{ $blogs->links() }}
        </div>
    </div>
@endsection

@section('script')
    <script async src="{{ URL::asset('js/fb.js') }}"></script>
@endsection