<div class="col-md-4 col-sm-6 col-xs-12 row-card" style="padding: 10px;">
    <div class="blog-card">
        <div class="card-bg" style="background-image: url('{{ url('image/show/'.$blog->cover) }}')">
            <a href="{{ url('blog/'.$blog->slug) }}">
                <div style="height: 65%"></div>
            </a>
        </div>
        <div class="card-caption" data-toggle="tooltip" data-placement="auto bottom" title="{{ $blog->title }}">
            <a href="{{ url('blog/'.$blog->slug) }}" style="text-decoration: none">
            @if(mb_strlen($blog->title, 'UTF-8') < 22)
                <h2><span>{!! iconv_substr($blog->title, 0, 22, 'UTF-8') !!}</span></h2>
            @else
                <h2><span>{!! iconv_substr($blog->title, 0, 22, 'UTF-8').'...' !!}</span></h2>
            @endif
            <p><span>By {!! $blog->user->name !!}</span></p>
            </a>
        </div>
        <div class="card-action">
            <div class="col-md-10 col-xs-10" style="padding-left: 0;text-align: left">
                @foreach($blog->tags as $tag)
                    @if($loop->iteration <= 2)
                        <a href="{{ url('tag/'.$tag->slug) }}" style="text-decoration: none">
                            <span class="label label-success">{{ $tag->name }}</span>
                        </a>
                    @endif
                @endforeach
            </div>
            <div class="col-md-2 col-xs-2" style="padding-right: 0;text-align: center">
                <a href="#" data-toggle="modal" data-target="#sharePanel{{$blog->id}}" style="color: #0f0f0f">
                    <i class="material-icons">share</i>
                </a>
            </div>
        </div>
    </div>

    @if(Request::is('admin/*'))
        <div class="col-md-6 col-xs-6">
            <a href="{{ url('blog/'.$blog->slug.'/edit') }}" class="btn btn-warning btn-lg btn-block">
                Edit
                <span class="glyphicon glyphicon-wrench"></span>
            </a>
        </div>
        <div class="col-md-6 col-xs-6">
            <button type="button" class="btn btn-danger btn-block btn-lg" data-toggle="modal" data-target="#deleteModal{{$blog->id}}">Delete</button>

            <div class="modal fade" id="deleteModal{{$blog->id}}" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Delete</h4>
                        </div>
                        <div class="modal-body">
                            <p>Do you want to delete this blog?</p>
                        </div>
                        <div class="modal-footer">
                            {!! Form::model($blog, ['method' => 'DELETE', 'url'=>'blog/'.$blog->id]) !!}
                            <button class="btn btn-danger btn-block btn-lg" type="submit">
                                Delete
                            </button>
                            {!! Form::close() !!}
                            <br>
                            <button type="button" class="btn btn-default btn-block" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @include('blog._share', $blog)
</div>