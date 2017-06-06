<div class="row col-md-12" style="padding: 1%;background: #ffffff">
    <div class="col-md-3 col-sm-4 col-xs-12 teacher-image"
         style="background-image: url('{{ url('image/show/'.$staff->image) }}')"></div>
    <div class="col-md-9 col-sm-8 col-xs-12" style="background: #40826D;color: #ffffff;padding: 1%;margin-bottom: 1%">
        <h2>{!! $staff->name_th !!}</h2>
    </div>
    <div class="col-md-9 col-sm-8 col-xs-12">
        <h4>{{ $staff->name_en }}</h4>
        <h4><b>{{ $staff->position }}</b></h4>
        <p><b>อีเมล : </b>{{ $staff->email }}</p>
        <p><b>เว็บไซต์ : </b>{{ $staff->website }}</p>

        @if (Request::is('admin/*'))
            <h4><b>Status : {{ $staff->status }}</b></h4>
            <div class="col-md-6 col-xs-6">
                <a class="btn btn-warning btn-block" href="{{ url('staff/'.$staff->id.'/edit') }}">
                    Edit
                    <span class="glyphicon glyphicon-wrench"></span>
                </a>
            </div>
            <div class="col-md-6 col-xs-6">
                {!! Form::model($staff, ['method' => 'DELETE', 'url'=>'staff/'.$staff->id]) !!}
                <button class="btn btn-danger btn-block" type="submit">
                    Delete
                    <span class="glyphicon glyphicon-remove-sign"></span>
                </button>
                {!! Form::close() !!}
            </div>
        @endif
    </div>
</div>
<hr>