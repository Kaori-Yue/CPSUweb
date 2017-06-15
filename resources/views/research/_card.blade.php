<div class="col-md-6" style="padding: 1%;">
    <a href="{{ url('research/'.$research->slug) }}" style="color: #FFFFFF;text-decoration: none">
        <div class="well-lg" style="height: 240px;background: rgba(217, 143, 79, 0.8);border-radius: 0">
            <h3><b>{{ $research->name }}</b></h3>
            <div class="hidden-xs"><br></div>
            <hr>
            <h4>โดย {{ $research->owner }}</h4>
        </div>
    </a>
    @if(Request::is('admin/*'))
        <div class="col-md-12" style="background: rgba(217, 143, 79, 0.7);padding: 1%;border-top-style: none;">
            <div class="col-md-6">
                <a href="{{ url('research/'.$research->id.'/edit') }}" class="btn btn-warning btn-block btn-lg">Edit</a>
            </div>
            <div class="col-md-6">
                {!! Form::model($research, ['method' => 'DELETE', 'url'=>'research/'.$research->id]) !!}
                <button class="btn btn-danger btn-block btn-lg" type="submit">
                    Delete
                    <span class="glyphicon glyphicon-remove-sign"></span>
                </button>
                {!! Form::close() !!}
            </div>
        </div>
    @endif
</div>