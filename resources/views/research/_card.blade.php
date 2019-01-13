<div class="col-md-12" style="padding: 10px">
    <div class="research-card">
        <div class="research-content col-md-8 col-sm-8">
                <h3 style="color: white"><b>{!! str_limit($research->info, 190, '....') !!}</b></h3>
                <div class="hidden-xs hidden-sm">
                    
                </div>
                <hr>
                <h4 style="color: white">โดย {{ $research->teacher()->firstOrFail()->name_th }}</h4>
                <h4 style="color: white">ตีพิมพ์เมื่อ พ.ศ. {{ $research->publication }}</h4>
            </a>
        </div>
        @if(Request::is('admin/*'))
            <div class="research-action col-md-12">
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <a href="{{ url('research/'.$research->id.'/edit') }}" class="btn btn-warning btn-block">Edit</a>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#deleteModal{{$research->id}}">Delete</button>

                    <div class="modal fade" id="deleteModal{{$research->id}}" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Delete</h4>
                                </div>
                                <div class="modal-body">
                                    <p>Do you want to delete this research?</p>
                                </div>
                                <div class="modal-footer">
                                    {!! Form::model($research, ['method' => 'DELETE', 'url'=>'research/'.$research->id]) !!}
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
            </div>
        @endif
    </div>
</div>