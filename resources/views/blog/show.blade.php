@extends('main')

@section('meta')
<meta property="og:title"  content="{{ $blog->title }}" />
<meta property="og:type" content="article">
<meta property="og:description" content="Department of Computing Silpakorn University">
<meta property="og:locale" content="th_TH">
<meta property="og:image" content="{{ url('image/show/'.$blog->cover) }}">
<meta property="og:url" content="{{ 'http://202.28.72.71/CPSUweb/public/index.php/blog/'.$blog->slug }}">

<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="{{ $blog->title }}" />
<meta name="twitter:description" content="Department of Computing Silpakorn University" />
<meta name="twitter:image" content="{{ url('image/show/'.$blog->cover) }}" />
@endsection

@section('content')
    <div style="background: rgba(130,109,64,0.4)">
        <div class="container">
            <div class="row center-cropped" style="background-image: url('{{ url('image/show/'.$blog->cover) }}')"></div>
            <div class="row row-card" style="padding: 50px 0 50px 0">
                <div class="col-md-10 col-md-offset-1 col-xs-offset-0">
                    <h1>{{ $blog->title }}</h1>
                    <br>
                    <hr>
                </div>

                <div class="col-md-10 col-md-offset-1 col-xs-offset-0" style="font-size: 20px;font-family: 'Trirong', serif;padding-top: 40px;padding-bottom: 40px">
                    {!! $blog->content !!}
                    <br>
                </div>

                <div class="col-md-10 col-md-offset-1 col-xs-offset-0" style="font-size: 16px">
                    <hr>
                    <p>แผยแพร่เมื่อ : {{ $blog->publish_at }}</p>
                    <p>โดย : {{ $blog->user->name }}</p>
                    <p>แท็ก :
                        @foreach($blog->tags as $tag)
                            <a href="{{ url('tag/'.$tag->slug) }}" style="text-decoration: none">
                                <span class="label label-success">{{ $tag->name }}</span>
                            </a>
                        @endforeach
                    </p>
                </div>
                <br>
            </div>

            <div class="row row-card" style="padding: 15px 0 15px 0; text-align: center">
                <div class="col-md-12">
                    <div class="col-md-6 col-xs-6">
                        <button type="button" class="btn btn-default btn-block" id="shareToFB" style="background:#3b5998;color: #FFFFFF">
                            <img style="height: 100px" class="img-responsive" src="{{ URL::asset('image/fb-art.png') }}" alt="share to facebook">
                            Share on Facebook
                        </button>
                    </div>
                    <div class="col-md-6 col-xs-6">
                        <button type="button" class="btn btn-default btn-block" id="shareToTW" style="background: #28A9E2;color: #FFFFFF">
                            <img style="height: 100px" class="img-responsive" src="{{ URL::asset('image/twitter-logo.jpg') }}" alt="share to twitter">
                            Share on Twitter
                        </button>
                    </div>
                </div>
            </div>

            <div class="row col-md-12 col-xs-12" style="background: #ffffff">
                <h2 class="primary-section-heading">ข่าวที่เกี่ยวข้อง</h2>
                @foreach($relateBlogs as $blog)
                    @include('blog._card', $blog)
                @endforeach
                <div class="col-md-12 col-xs-12" style="text-align: right">
                    <h4><a href="">ข่าวที่เกี่ยวข้องเพิ่มเติม ></a></h4>
                </div>
                <script>
                    $(document).ready(function(){
                        $('[data-toggle="tooltip"]').tooltip();
                    });
                </script>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ URL::asset('js/fb.js') }}"></script>
    <script>
        document.getElementById('shareToFB').onclick = function() {
            FB.ui({
                method: 'share',
                display: 'popup',
                href: '{{ 'http://202.28.72.71/CPSUweb/public/index.php/blog/'.$blog->slug }}',
            }, function(response){});
        };

        document.getElementById('shareToTW').onclick = function() {
            var url = "{{ 'http://202.28.72.71/CPSUweb/public/index.php/blog/'.$blog->slug }}";
            var text = "{{ $blog->title }}";
            window.open('http://twitter.com/share?url=' + encodeURIComponent(url) + '&text=' + encodeURIComponent(text), '', 'left=0,top=0,width=550,height=450,personalbar=0,toolbar=0,scrollbars=0,resizable=0');
        };
    </script>
@endsection