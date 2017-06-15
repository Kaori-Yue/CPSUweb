<div class="col-md-12" style="padding: 1%">
    <a href="{{ url('curricula/'.$curricula->slug) }}" style="color: #FFFFFF;text-decoration: none">
        <div class="curricula-card" style="height: 240px;background: rgba(217, 143, 79, 0.8);border-radius: 0">
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
        <div class="col-md-12" style="background:rgba(217, 143, 79, 0.8);padding: 1%;border-top-style: none;">
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