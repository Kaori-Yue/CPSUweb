<div class="row col-md-12" style="padding: 1%;background: #ffffff">
    <div class="col-md-3 col-xs-12 teacher-image"
         style="background-image: url('{{ url('image/show/'.$teacher->image) }}')"></div>
    <div class="col-md-9 col-xs-12" style="background: #40826D;color: #ffffff;padding: 1%;margin-bottom: 1%">
        <h2>{!! $teacher->name_th !!}</h2>
    </div>
    <div class="col-md-9 col-xs-12">
        <h4>{{ $teacher->name_en }}</h4>
        @if($teacher->position != '')
            <h4><b>{{ $teacher->position }}</b></h4>
        @endif
        <p><b>ประวัติการศึกษา</b></p>
        <ul>
            @if($teacher->doctor_degree != '')
                <li>{{ $teacher->doctor_degree }}</li>
            @endif
            <li>{{ $teacher->master_degree }}</li>
            <li>{{ $teacher->bachelor_degree }}</li>
        </ul>
        <p><b>อีเมล : </b>{{ $teacher->email }}</p>
        <p><b>สาขาที่เชี่ยวชาญ : </b>{{ $teacher->expertise }}</p>

        @if (Request::is('admin/*'))
            <div class="col-md-6 col-xs-6">
                <a class="btn btn-warning btn-block" href="{{ url('teacher/'.$teacher->id.'/edit') }}">
                    Edit
                    <span class="glyphicon glyphicon-wrench"></span>
                </a>
            </div>
            <div class="col-md-6 col-xs-6">
                {!! Form::model($teacher, ['method' => 'DELETE', 'url'=>'teacher/'.$teacher->id]) !!}
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