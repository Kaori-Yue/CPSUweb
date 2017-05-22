<div class="col-md-4 col-sm-6 col-xs-12 row-card" style="padding: 1%;"  data-toggle="tooltip" data-placement="auto bottom" title="{{ $blog->title }}">
    <a href="{{ url('blog/'.$blog->slug) }}">
        <div class="card card-bg" style="background-image: url('{{ url('image/show/'.$blog->cover) }}')">
            <div class="card-caption">
                @if(mb_strlen($blog->title, 'UTF-8') < 22)
                    <h2><span>{!! iconv_substr($blog->title, 0, 22, 'UTF-8') !!}</span></h2>
                @else
                    <h2><span>{!! iconv_substr($blog->title, 0, 22, 'UTF-8').'...' !!}</span></h2>
                @endif
                <p><span>By {!! $blog->user->name !!}</span></p>
            </div>
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