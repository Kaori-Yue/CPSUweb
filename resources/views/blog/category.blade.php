@extends('main2')

@section('content')
    <div class="container-content">
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