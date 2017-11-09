<div class="card-news background-light-gray">
    <a href="{{ url('blog/'.$blog_r->slug) }}" style="text-decoration: none">
        <ul class="container-card-news">
            <li class="image-card-news">
                <img src="{{ url('image/show/'.$blog_r->cover) }}" />
                <!--<img src="23.jpeg"/>-->
            </li>
            <li class="content-card-news">
                <p class="time-create-news">{{ $blog_r->publish_at }}</p>
                <h1 class="title">{!! $blog_r->title !!}</h1>
                <p class="description-card-news">{!! $blog_r->description !!}</p>
            </li>
        </ul>
    </a>
    <div class="detail-card-news">
        <p class="create-by-card-news">โดย : {!! $blog_r->user->name !!}</p>
        <ul class="logos-share-card-news">
            <li class="logo-share-card-news" id="shareToFB{{$blog_r->id}}">
                <img src="{{ URL::asset('image/facebook.png') }}">
                <p class="description-logo-share-card-news">Share Facebook</p>
            </li>
            <li class="logo-share-card-news" id="shareToTW{{$blog_r->id}}">
                <img src="{{ URL::asset('image/twitter.png') }}">
                <p class="description-logo-share-card-news">Share Twitter</p>
            </li>
        </ul>
    </div>
</div>

<script>
    document.getElementById('shareToFB{{$blog_r->id}}').onclick = function() {
        FB.ui({
            method: 'share',
            display: 'popup',
            href: '{{ 'http://202.28.72.71/blog/'.$blog_r->slug }}',
        }, function(response){});
    };

    document.getElementById('shareToTW{{$blog->id}}').onclick = function() {
        var url = "{{ 'http://202.28.72.71/blog/'.$blog_r->slug }}";
        var text = "{{ $blog_r->title }}";
        window.open('http://twitter.com/share?url=' + encodeURIComponent(url) + '&text=' + encodeURIComponent(text), '', 'left=0,top=0,width=550,height=450,personalbar=0,toolbar=0,scrollbars=0,resizable=0');
    };
</script>