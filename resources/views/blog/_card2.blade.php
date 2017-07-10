<div class="col-md-4 col-sm-6 col-xs-12" style="padding: 0">
    <div class="blog-card">
        <div class="card-title col-md-12" style="background-image: url('{{ url('image/show/'.$blog->cover) }}')"></div>
        <div class="card-text col-md-12" data-toggle="tooltip" data-placement="auto bottom" title="{{ $blog->title }}">
            @if(mb_strlen($blog->title, 'UTF-8') < 22)
                <h3><span>{!! iconv_substr($blog->title, 0, 22, 'UTF-8') !!}</span></h3>
            @else
                <h3><span>{!! iconv_substr($blog->title, 0, 22, 'UTF-8').'...' !!}</span></h3>
            @endif
            <p><span>By {!! $blog->user->name !!}</span></p>
        </div>
        <div class="col-md-12" style="padding-top: 0; padding-bottom: 0; margin-top: 0; margin-bottom: 0">
            <hr>
        </div>
        <div class="card-menu col-md-12 col-xs-12">
            <div class="col-md-10 col-xs-10" style="padding: 0;">
            <p>
            @foreach($blog->tags as $tag)
                @if($loop->iteration <= 2)
                    <a href="{{ url('tag/'.$tag->slug) }}" style="text-decoration: none">
                        <span class="label label-primary">{{ $tag->name }}</span>
                    </a>
                @endif
            @endforeach
            </p>
            </div>
            <div class="col-md-2 col-xs-2" style="text-align: right">
                <a href="#" data-toggle="modal" data-target="#sharePanel{{$blog->id}}" style="color: #0f0f0f">
                    <i class="material-icons">share</i>
                </a>
            </div>
        </div>
    </div>
    @include('blog._share', $blog)
</div>