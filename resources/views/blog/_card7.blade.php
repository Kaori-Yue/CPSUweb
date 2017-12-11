<li class="list-wrapper-card-news">
    <div class="card-news-horizontal">
        <a>
            <img class="image-card-news-horizontal" src="{{ url('image/show/'.$blog->cover) }}">
        </a>
        <a href="{{"blog/". $blog->slug}}">
            <h3 class="title-card-news-horizontal">{{$blog->title}}</h3>
        </a>
    </div>
</li>