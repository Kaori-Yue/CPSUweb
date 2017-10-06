<div class="row col-md-12" style="padding: 10px;background: #ffffff">
    <div class="staff-card">
        <div class="col-md-3 col-sm-4 col-xs-12 staff-image"
             style="background-image: url('{{ url('image/show/'.$staff->image) }}')"></div>
        <div class="col-md-9 col-sm-8 col-xs-12" style="background: #6fb29b;color: #ffffff;padding: 1%;margin-bottom: 1%">
            <h2>
                {!! $staff->name_th !!}
                @if (Request::is('admin/*'))
                    @if($staff->status == 'duty')
                        <b>
                            <span class="label label-success">Duty</span>
                        </b>
                    @elseif($staff->status == 'disable')
                        <b>
                            <span class="label label-default">Disable</span>
                        </b>
                    @endif
                @endif
            </h2>
        </div>
        <div class="col-md-9 col-sm-8 col-xs-12">
            <h3>{{ $staff->name_en }}</h3>
            <br>
            <h4><b>{{ $staff->position }}</b></h4>
            <br>
            <p><b>อีเมล : </b>{{ $staff->email }}</p>
            <p><b>เว็บไซต์ : </b>{{ $staff->website }}</p>

            @if (Request::is('admin/*'))
                <div class="col-md-6 col-xs-6">
                    <a class="btn btn-warning btn-block" href="{{ url('staff/'.$staff->id.'/edit') }}">
                        Edit
                        <span class="glyphicon glyphicon-wrench"></span>
                    </a>
                </div>
                <div class="col-md-6 col-xs-6">
                    <button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#deleteModal{{$staff->id}}">Delete</button>

                    <div class="modal fade" id="deleteModal{{$staff->id}}" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Delete</h4>
                                </div>
                                <div class="modal-body">
                                    <p>Do you want to delete this staff?</p>
                                </div>
                                <div class="modal-footer">
                                    {!! Form::model($staff, ['method' => 'DELETE', 'url'=>'staff/'.$staff->id]) !!}
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