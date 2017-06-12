<div id="sharePanel{{$blog->id}}" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Share {{ $blog->title }} to ...</h4>
            </div>
            <div class="modal-body" style="height: 200px">
                <div class="col-md-6 col-xs-6" style="padding: 1%; text-align: center">
                    <button type="button" class="btn btn-default" id="shareToFB{{$blog->id}}">
                        <img style="height: 100px" class="img-responsive" src="{{ URL::asset('image/fb_square.png') }}" alt="share to facebook">
                    </button>
                </div>
                <div class="col-md-6 col-xs-6" style="padding: 1%; text-align: center">
                    <button type="button" class="btn btn-default" id="shareToTW{{$blog->id}}">
                        <img style="height: 100px" class="img-responsive" src="{{ URL::asset('image/tw_square.png') }}" alt="share to twitter">
                    </button>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
    document.getElementById('shareToFB{{$blog->id}}').onclick = function() {
        FB.ui({
            method: 'share',
            display: 'popup',
            href: '{{ 'http://202.28.72.71/CPSUweb/public/index.php/blog/'.$blog->slug }}',
        }, function(response){});
    };

    document.getElementById('shareToTW{{$blog->id}}').onclick = function() {
        var url = "{{ 'http://202.28.72.71/CPSUweb/public/index.php/blog/'.$blog->slug }}";
        var text = "{{ $blog->title }}";
        window.open('http://twitter.com/share?url=' + encodeURIComponent(url) + '&text=' + encodeURIComponent(text), '', 'left=0,top=0,width=550,height=450,personalbar=0,toolbar=0,scrollbars=0,resizable=0');
    };
</script>