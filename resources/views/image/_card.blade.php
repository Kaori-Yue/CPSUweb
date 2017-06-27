<div class="col-md-3 col-sm-4 col-xs-6 row-card" style="padding: 1%;">
    <div class="card card-bg" style="background-image: url('{{ url('image/show/'.$image->id) }}'); height: 200px; overflow: hidden">
        <div class="card-caption">
            <button class="btn btn-default" id="image-link{{$image->id}}" data-clipboard-text="{{ url('image/show/'.$image->id) }}">
                <i class="fa fa-clone"></i>
            </button>
        </div>
    </div>
    <script>
        new Clipboard('#image-link{{$image->id}}');
    </script>

    {{--@if(Request::is('admin/*'))
        <div class="col-md-6 col-xs-6">
            <a href="{{ url('blog/'.$blog->slug.'/edit') }}" class="btn btn-warning btn-lg btn-block">
                Edit
                <span class="glyphicon glyphicon-wrench"></span>
            </a>
        </div>
        <div class="col-md-6 col-xs-6">
            {!! Form::model($blog, ['method' => 'DELETE', 'url'=>'blog/'.$blog->id]) !!}
            <button class="btn btn-danger btn-block btn-lg" type="submit">
                Delete
                <span class="glyphicon glyphicon-remove-sign"></span>
            </button>
            {!! Form::close() !!}
        </div>
    @endif--}}
</div>
