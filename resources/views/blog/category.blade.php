@extends('main2')

@section('content')
    <div class="container">
        <div class="row col-md-12 col-xs-12" style="background: #ffffff">
            <h2 class="primary-section-heading">{{ $title }}</h2>
            <ul class="wrapper-card-news">
            @foreach($blogs as $blog)
                <li>
                    @include('blog._card2', $blog)
                </li>
            @endforeach
            </ul>
            <script>
                $(document).ready(function(){
                    $('[data-toggle="tooltip"]').tooltip();
                });
            </script>
        </div>
        <div class="row col-md-12 col-xs-12" style="text-align: center;">
            {{ $blogs->links() }}
        </div>
    </div>
@endsection

@section('script')
    <script async src="{{ URL::asset('js/fb.js') }}"></script>
@endsection