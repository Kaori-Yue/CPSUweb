<div class="row col-md-12" style="padding: 10px;background: #ffffff">
    <div class="teacher-card">
        <div class="col-md-3 col-sm-4 col-xs-12 teacher-image"
             style="background-image: url('{{ url('image/show/'.$teacher->image) }}')"></div>
        <div class="col-md-9 col-sm-8 col-xs-12" style="background: #6fb29b;color: #ffffff;padding: 1%;margin-bottom: 1%">
            <h2>
                {!! $teacher->name_th !!}
                @if (Request::is('admin/*'))
                    @if($teacher->status == 'duty')
                    <b>
                        <span class="label label-success">Duty</span>
                    </b>
                    @elseif($teacher->status == 'retire')
                    <b>
                        <span class="label label-danger">Retire</span>
                    </b>
                    @elseif($teacher->status == 'study')
                    <b>
                        <span class="label label-primary">Study</span>
                    </b>
                    @elseif($teacher->status == 'disable')
                    <b>
                        <span class="label label-default">Disable</span>
                    </b>
                    @endif
                @endif
            </h2>
        </div>
        <div class="col-md-9 col-sm-8 col-xs-12">
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
            @if($teacher->website != '')
            <p><b>เว็บไซต์ : </b>{{ $teacher->website }}</p>
            @endif

            @if (Request::is('admin/*'))
                <div class="col-md-6 col-xs-6">
                    <a class="btn btn-warning btn-block" href="{{ url('teacher/'.$teacher->id.'/edit') }}">
                        Edit
                        <span class="glyphicon glyphicon-wrench"></span>
                    </a>
                </div>
                <div class="col-md-6 col-xs-6">
                    <button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#deleteModal{{$teacher->id}}">Delete</button>

                    <div class="modal fade" id="deleteModal{{$teacher->id}}" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Delete</h4>
                                </div>
                                <div class="modal-body">
                                    <p>Do you want to delete this teacher?</p>
                                </div>
                                <div class="modal-footer">
                                    {!! Form::model($teacher, ['method' => 'DELETE', 'url'=>'teacher/'.$teacher->id]) !!}
                                    <button class="btn btn-danger btn-block" type="submit">
                                        Delete
                                    </button>
                                    {!! Form::close() !!}
                                    <br>
                                    <button type="button" class="btn btn-default btn-block" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
<hr>