<div class="col-md-6 col-sm-6 col-xs-12" style="padding: 10px;height: 100%">
    <div class="document-card">
        <div class="document-content col-md-12" @if($document->status == 'hide') style="background: rgba(130, 109, 64, 0.4);" @endif>
            <div class="col-sm-8 col-md-9">
                <h2>
                    {{ $loop->iteration }}) {{ $document->name }}
                </h2>
            </div>
            <div class="col-sm-4 col-md-3">
                <div class="col-md-12" style="padding: 0;margin: 0">
                    <a href="{{ url('file/show/'.$document->file_record->id) }}" class="btn btn-success btn-block" target="_blank">
                        <span class="glyphicon glyphicon-download-alt"></span>
                    </a>
                </div>

                @if(Request::is('admin/*'))
                    <div class="col-md-12" style="padding: 0;margin: 0">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <a href="{{ url('document/'.$document->id.'/edit') }}" class="btn btn-warning btn-block">
                                <span class="glyphicon glyphicon-wrench"></span>
                            </a>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#deleteModal{{$document->id}}">
                                <span class="glyphicon glyphicon-remove-sign"></span>
                            </button>

                            <div class="modal fade" id="deleteModal{{$document->id}}" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Delete</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Do you want to delete this document?</p>
                                        </div>
                                        <div class="modal-footer">
                                            {!! Form::model($document, ['method' => 'DELETE', 'url'=>'document/'.$document->id]) !!}
                                            <button class="btn btn-danger btn-block" type="submit">
                                                <span class="glyphicon glyphicon-remove-sign"></span>
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
            <div class="col-sm-12 col-md-12">
                <hr>
                <p>
                    {{ $document->description }}
                    @if(Request::is('admin/*'))
                        @if($document->status == 'show')
                            <span class="label label-success">Show</span>
                        @else
                            <span class="label label-danger">Hide</span>
                        @endif
                    @endif
                </p>
            </div>
        </div>
    </div>
</div>