<a href="{{ url('blog/'.$blog->slug) }}">
    <div class="card card-bg col-md-4 col-xs-12" style="background-image: url('{{ url('image/show/'.$blog->cover) }}')">
        <h2><span>{!! $blog->title !!}</span></h2>
        <br>
        <p><span>By {!! $blog->user->name !!}</span></p>
    </div>
</a>