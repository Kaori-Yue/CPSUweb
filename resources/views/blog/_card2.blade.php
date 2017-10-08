 <div class="card-news background-white">
        <ul class="container-card-news">
            <li class="image-card-news">
                <img src="{{ url('image/show/'.$blog->cover) }}" />
                <!--<img src="23.jpeg"/>-->
            </li>
            <li class="content-card-news">
                <p class="time-create-news">{{ $blog->publish_at }}</p>
                <h1 class="title">{!! iconv_substr($blog->title, 0, 22, 'UTF-8') !!}</h1>
                <p class="description-card-news">{!! iconv_substr($blog->content, 0, 50, 'UTF-8') !!}</p>
            </li>

        </ul>
        <div class="detail-card-news">
            <p class="create-by-card-news">โดย : {!! $blog->user->name !!}</p>
            <ul class="logos-share-card-news">
                <li class="logo-share-card-news">
                    <img src="{{ URL::asset('image/facebook.png') }}">
                    <p class="description-logo-share-card-news">Share Facebook</p>
                </li>
                <li class="logo-share-card-news">
                    <img src="{{ URL::asset('image/twitter.png') }}">
                    <p class="description-logo-share-card-news">Share Twitter</p>
                </li>
            </ul>
        </div>
 </div>