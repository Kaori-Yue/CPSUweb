 <li class="list-card-news-category">
     <div class="card-news-vertical">
         <a href="{{url("news/". $blog->slug)}}">
             <img class="image-card-news-vertical" src="{{ url('image/crop/'.$blog->cover) }}">
         </a>
         <a href="{{url("news/". $blog->slug)}}">
             <h3 class="title-card-news-vertical">{!! $blog->title !!}</h3></a>
         </a>
         <p class="description-card-news-vertical">{!! $blog->description !!}</p>
         <div class="wrapper-time-create-card-news-vertical">
             <img class="image-calendar-card-news-vertical" src="{{ URL::asset('image/calendar.svg') }}" />
             <p class="time-create-card-news-vertical">{{ $blog->publish_at }}</p>
         </div>
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