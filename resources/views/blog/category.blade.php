@extends('main')

@section('content')
    <div class="container">
        <div class="row col-md-12 col-xs-12" style="background: #ffffff">
            <h2 class="primary-section-heading">{{ $title }}</h2>
            @foreach($blogs as $blog)
                @include('blog._card', $blog)
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