<a href="{{ url('blog/'.$blog->slug) }}">
    <div class="card card-bg row-card col-md-4 col-xs-12" style="background-image: url('{{ url('image/show/'.$blog->cover) }}')">
        @if(Request::is('admin/*'))
            <a href="{{ url('blog/'.$blog->slug.'/edit') }}" class="btn btn-warning">Edit</a>
        @endif
        <h2><span>{!! $blog->title !!}</span></h2>
        <br>
        <p><span>By {!! $blog->user->name !!}</span></p>
    </div>
</a>