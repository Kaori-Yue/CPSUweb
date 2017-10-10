<div class="col-md-3 col-sm-4 col-xs-6 row-card" style="padding: 1%;">
    <div class="image-card">
        <div class="card-bg" style="background-image: url('{{ url('image/thumbnail/'.$image->id) }}'); height: 200px;">
        </div>
        <div class="card-caption">
            @if(Request::is('admin/image') || Request::is('admin/image/*'))
                <div class="col-md-6 col-xs-12">
                    <button class="btn btn-default btn-block" id="image-link{{$image->id}}" data-clipboard-text="{{ url('image/show/'.$image->id) }}">
                        คัดลอก
                    </button>
                </div>
                <div class="col-md-6 col-xs-12" style="display: block">
                    <div class="col-md-6 col-xs-6">
                        <a href="{{ url('image/'.$image->id.'/edit') }}" class="btn btn-warning btn-block">
                            แก้ไข
                        </a>
                    </div>
                    <div class="col-md-6 col-xs-6">
                        <button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#deleteModal{{$image->id}}">
                            ลบ
                        </button>

                        <div class="modal fade" id="deleteModal{{$image->id}}" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Delete</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Do you want to delete this image?</p>
                                    </div>
                                    <div class="modal-footer">
                                        {!! Form::model($image, ['method' => 'DELETE', 'url'=>'image/'.$image->id]) !!}
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
            @else
                <div class="col-md-12" style="display: block">
                    <div class="col-md-6 col-xs-6">
                        <button type="button" class="btn btn-default btn-block" id="image-link{{$image->id}}"
                                data-clipboard-text="{{ url('image/show/'.$image->id) }}">
                            <i class="fa fa-clone"></i>
                        </button>
                    </div>
                    <div class="col-md-6 col-xs-6">
                        <a href="{{ url('image/'.$image->id.'/edit') }}" class="btn btn-warning btn-block">
                            <span class="glyphicon glyphicon-wrench"></span>
                        </a>
                    </div>
                </div>
            @endif
        </div>
    </div>

    <script>
        new Clipboard('#image-link{{$image->id}}');
    </script>
</div>
