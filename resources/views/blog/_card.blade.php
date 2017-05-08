<div class="col-md-4 col-xs-12 row-card" style="padding: 1%">
<a href="{{ url('blog/'.$blog->slug) }}">
    <div class="card card-bg" style="background-image: url('{{ url('image/show/'.$blog->cover) }}')">
        <h2><span>{!! $blog->title !!}</span></h2>
        <br>
        <p><span>By {!! $blog->user->name !!}</span></p>
    </div>
</a>
@if(Request::is('admin/*'))
    <div class="col-md-6 col-xs-6">
        <a href="{{ url('blog/'.$blog->slug.'/edit') }}" class="btn btn-warning btn-lg btn-block">Edit</a>
    </div>
    <div class="col-md-6 col-xs-6">
        <a href="" class="btn btn-danger btn-lg btn-block">Delete</a>
    </div>
@endif
</div>