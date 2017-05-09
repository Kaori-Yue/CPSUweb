<div class="col-md-12" style="padding: 1%;background: #FFFFFF">
    <a href="{{ url('curricula/'.$curricula->slug) }}" style="text-decoration: none">
        <div class="well-lg" style="border: solid;border-radius: 0">
            <h3><b>{{ $curricula->name_th }}</b></h3>
            <h4>{{ $curricula->name_en }}</h4>
            <hr>
            {{--<p>{{ substr($research->description, 0, 120) }}</p>--}}
            <p>{{ $curricula->degree_name_th }}</p>
        </div>
    </a>
    @if(Request::is('admin/*'))
        <div class="col-md-12" style="padding: 1%;border: solid;border-top-style: none;">
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