<li class="list-wrapper-card-news">
    <div class="card-news-vertical">
        <a href="{{url("news/". $blog_f->slug)}}">
            <img class="image-card-news-vertical" src="{{ url('image/crop/'.$blog_f->cover) }}">
        </a>
        <a href="{{url("news/". $blog_f->slug)}}">
            <h3 class="title-card-news-vertical">{{$blog_f->title}}</h3>
        </a>
        <p class="description-card-news-vertical">{!! $blog_f->description !!}</p>
        <div class="wrapper-time-create-card-news-vertical">
            <img class="image-calendar-card-news-vertical" src="{{ URL::asset('image/calendar.svg') }}" />
            <p class="time-create-card-news-vertical">{{ $blog_f->publish_at }}</p>
        </div>
    </div>

</li>