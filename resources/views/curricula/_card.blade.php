<div class="col-md-12" style="padding: 10px;height: 100%">
    <div class="curricula-card" style="background-image: url('{{ URL::asset('image/curricula_card_bg.jpg') }}');">
        <div class="curricula-content">
            <a href="{{ url('curricula/'.$curricula->slug) }}" style="text-decoration: none">
                <h3><b>{{ $curricula->name_th }}</b></h3>
                <h4>{{ $curricula->name_en }}</h4>
                <div class="hidden-xs">
                    <br>
                </div>
                <hr>
                <p>{{ $curricula->degree_name_th }}
                @if(Request::is('admin/*'))
                    @if($curricula->status == 'enable')
                        <b><span class="label label-success">Enable</span></b>
                    @else
                        <b><span class="label label-default">Disable</span></b>
                    @endif
                @endif</p>
            </a>
            @if(Request::is('admin/*'))
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <a href="{{ url('curricula/'.$curricula->id.'/edit') }}" class="btn btn-warning btn-block">
                        Edit
                        <span class="glyphicon glyphicon-wrench"></span>
                    </a>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    {!! Form::model($curricula, ['method' => 'DELETE', 'url'=>'curricula/'.$curricula->id]) !!}
                    <button class="btn btn-danger btn-block" type="submit">
                        Delete
                        <span class="glyphicon glyphicon-remove-sign"></span>
                    </button>
                    {!! Form::close() !!}
                </div>
            @endif
        </div>
    </div>
</div>