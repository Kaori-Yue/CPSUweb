<div class="col-md-6" style="padding: 1%">
    <a href="{{ url('research/'.$research->slug) }}" style="text-decoration: none">
        <div class="well-lg" style="border: solid;border-radius: 0;height: 250px">
            <h3><b>{{ $research->name }}</b></h3>
            <hr>
            <h4>{{ $research->owner }}</h4>
        </div>
    </a>
    @if(Request::is('admin/*'))
        <div class="col-md-12" style="padding: 1%;border: solid;border-top-style: none;">
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