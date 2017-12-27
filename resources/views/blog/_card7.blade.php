<li class="list-wrapper-card-news">
    <div class="card-news-horizontal">
        <a href="{{url("news/". $blog->slug)}}">
            <img class="image-card-news-horizontal" src="{{ url('image/crop/'.$blog->cover) }}">
        </a>
        <a href="{{url("news/". $blog->slug)}}">
            <h3 class="title-card-news-horizontal">{{str_limit($blog->title, 118)}}</h3>
        </a>
    </div>
</li>