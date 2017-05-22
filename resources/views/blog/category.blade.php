@extends('main')

@section('content')
    <div class="container">
        <div class="row col-md-12 col-xs-12" style="background: #ffffff">
            <h2 class="bg-success" style="margin: 1% 1% 0 1%;padding: 2%;text-align: left">{{ $title }}</h2>
            @foreach($blogs as $blog)
                @include('blog._card', $blog)
            @endforeach
            <script>
                $(document).ready(function(){
                    $('[data-toggle="tooltip"]').tooltip();
                });
            </script>
        </div>

        <div class="col-md-12" style="text-align: center;">
            <?php echo $blogs->render(); ?>
        </div>
    </div>
@stop