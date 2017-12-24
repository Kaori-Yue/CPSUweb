<li class="list-wrapper-card-news">
    <div class="card-news-horizontal">
        <a href="{{url("news/". $blog->slug)}}">
            <img class="image-card-news-horizontal" src="{{ url('image/crop/'.$blog->cover) }}">
        </a>
        <a href="{{url("news/". $blog->slug)}}">
            <h3 class="title-card-news-horizontal">{{$blog->title}}</h3>
        </a>
    </div>
</li>