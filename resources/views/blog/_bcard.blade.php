<div class="col-md-6 col-sm-6 col-xs-12 row-card" style="padding: 10px;">
    <div class="blog-card">
        <div class="card-bg" style="background-image: url('{{ url('image/show/'.$blog->cover) }}')">
            <a href="{{ url('news/'.$blog->slug) }}">
                <div style="height: 65%"></div>
            </a>
        </div>
        <div class="card-caption" data-toggle="tooltip" data-placement="auto bottom" title="{{ $blog->title }}">
            <a href="{{ url('news/'.$blog->slug) }}" style="text-decoration: none">
                @if(mb_strlen($blog->title, 'UTF-8') < 35)
                    <h2><span>{!! iconv_substr($blog->title, 0, 35, 'UTF-8') !!}</span></h2>
                @else
                    <h2><span>{!! iconv_substr($blog->title, 0, 35, 'UTF-8').'...' !!}</span></h2>
                @endif
                <p>
                    <span>By {!! $blog->user->name !!}</span>
                </p>
            </a>
        </div>
        <div class="card-action">
            <div class="col-md-10 col-xs-10" style="padding-left: 0;text-align: left">
                @if(Request::is('admin/*'))
                    @if($blog->status == 'publish')
                        <b><span class="label label-success">Publish</span></b>
                    @elseif($blog->status == 'draft')
                        <b><span class="label label-default">Draft</span></b>
                    @else
                        <b><span class="label label-danger">Disable</span></b>
                    @endif

                    @if($blog->featured == 1)
                        <b><span class="label label-success">Featured</span></b>
                    @else
                        <b><span class="label label-default">Normal</span></b>
                    @endif
                @else
                    @foreach($blog->tags as $tag)
                        @if($loop->iteration <= 2)
                            <a href="{{ url('tag/'.$tag->slug) }}" style="text-decoration: none">
                                <span class="label label-success">{{ $tag->name }}</span>
                            </a>
                        @endif
                    @endforeach
                @endif
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
            <a href="{{ url('news/'.$blog->slug.'/edit') }}" class="btn btn-warning btn-lg btn-block">
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
                            <p>Do you want to delete this blog ?</p>
                        </div>
                        <div class="modal-footer">
                            {!! Form::model($blog, ['method' => 'DELETE', 'url'=>'news/'.$blog->id]) !!}
                            <button class="btn btn-danger btn-block" type="submit">
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