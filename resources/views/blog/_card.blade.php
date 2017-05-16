<div class="col-md-4 col-sm-6 col-xs-12 row-card" style="padding: 1%">
    <a href="{{ url('blog/'.$blog->slug) }}">
        <div class="card card-bg" style="background-image: url('{{ url('image/show/'.$blog->cover) }}')">
            <h2><span>{!! $blog->title !!}</span></h2>
            <br>
            <p><span>By {!! $blog->user->name !!}</span></p>
        </div>
    </a>
    @if(Request::is('admin/*'))
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
    @endif
</div>