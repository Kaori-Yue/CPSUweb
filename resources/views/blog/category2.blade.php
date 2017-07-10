@extends('main2')

@section('content')
    <div class="container">
        <div class="row col-md-12 col-xs-12">
            <h2 style="margin: 1% 0 0 1%;padding: 2%;text-align: left">{{ $title }}</h2>
            @foreach($blogs as $blog)
                @include('blog._card2', $blog)
            @endforeach
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
@stop