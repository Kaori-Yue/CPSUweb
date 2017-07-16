<div class="col-md-12" style="padding: 10px">
    <div class="curricula-card" style="background-image: url('{{ URL::asset('image/curricula_card_bg.jpg') }}')">
        <a href="{{ url('curricula/'.$curricula->slug) }}" style="text-decoration: none">
            <div class="curricula-content">
                <h3><b>{{ $curricula->name_th }}</b></h3>
                <h4>{{ $curricula->name_en }}</h4>
                <div class="hidden-xs">
                    <br>
                </div>
                <hr>
                <p>{{ $curricula->degree_name_th }}</p>
            </div>
        </a>
        @if(Request::is('admin/*'))
            <div class="curricula-action col-md-12">
                <div class="col-md-6">
                    <a href="{{ url('curricula/'.$curricula->id.'/edit') }}" class="btn btn-warning btn-block btn-lg">
                        Edit
                        <span class="glyphicon glyphicon-wrench"></span>
                    </a>
                </div>
                <div class="col-md-6">
                    {!! Form::model($curricula, ['method' => 'DELETE', 'url'=>'curricula/'.$curricula->id]) !!}
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