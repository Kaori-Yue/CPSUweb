<li class="list-wrapper-card-news">
    <div class="card-news-horizontal">
        <a href="{{url("news/". $blog_r->slug)}}">
            <img class="image-card-news-horizontal" src="{{ url('image/crop/'.$blog_r->cover) }}">
        </a>
        <a href="{{url("news/". $blog_r->slug)}}">
            <h3 class="title-card-news-horizontal">{!! $blog_r->title !!}</h3>
        </a>
    </div>
</li>



<script>
    document.getElementById('shareToFB{{$blog->id}}').onclick = function() {
        FB.ui({
            method: 'share',
            display: 'popup',
            href: '{{ 'http://202.28.72.71/blog/'.$blog->slug }}',
        }, function(response){});
    };

    document.getElementById('shareToTW{{$blog->id}}').onclick = function() {
        var url = "{{ 'http://202.28.72.71/blog/'.$blog->slug }}";
        var text = "{{ $blog->title }}";
        window.open('http://twitter.com/share?url=' + encodeURIComponent(url) + '&text=' + encodeURIComponent(text), '', 'left=0,top=0,width=550,height=450,personalbar=0,toolbar=0,scrollbars=0,resizable=0');
    };
</script>