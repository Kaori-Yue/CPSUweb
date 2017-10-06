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
                    <button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#deleteModal{{$curricula->id}}">Delete</button>

                    <div class="modal fade" id="deleteModal{{$curricula->id}}" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Delete</h4>
                                </div>
                                <div class="modal-body">
                                    <p>Do you want to delete this curricula ?</p>
                                </div>
                                <div class="modal-footer">
                                    {!! Form::model($curricula, ['method' => 'DELETE', 'url'=>'curricula/'.$curricula->id]) !!}
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