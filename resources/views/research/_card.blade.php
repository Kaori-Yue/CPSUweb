<div class="col-md-12" style="padding: 10px">
    <div class="research-card" style="background-image: url('{{ URL::asset('image/SC-SU-Formal-TH_resize.png') }}')">
        <a href="{{ url('research/'.$research->slug) }}" style="text-decoration: none">
            <div class="research-content col-md-8 col-sm-8">
                <h3><b>{!! $research->name !!}</b></h3>
                <div class="hidden-xs hidden-sm">
                    <br>
                </div>
                <hr>
                <h4>โดย {{ $research->owner }}</h4>
            </div>
        </a>
        @if(Request::is('admin/*'))
            <div class="research-action col-md-12">
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
</div>