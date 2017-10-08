 <a href="{{ url('curricula/'.$curricula->slug) }}" style="text-decoration: none">
                <div class="card-course">
                    <p class="type-card-course">หลักสูตร : {{$curricula->degree_name_th}}</p>
                    <h1 class="name-card-course">{{$curricula->name_th}}</h1>
                    <h1 class="name-card-course">{{$curricula->name_en}}</h1>
                </div>
                    @if(Request::is('admin/*'))
                        @if($curricula->status == 'enable')
                            <b><span class="label label-success">Enable</span></b>
                        @else
                            <b><span class="label label-default">Disable</span></b>
                        @endif
                    @endif</p>
            </a>
 <div class="col-md-12" style="padding: 10px;height: 100%">
     <div class="curricula-card" style="background-image: url('{{ URL::asset('image/curricula_card_bg.jpg') }}');">
         <div class="curricula-content">
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