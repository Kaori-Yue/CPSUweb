<div class="col-md-3 col-sm-4 col-xs-6 row-card" style="padding: 1%;">
    <div class="card card-bg" style="height: 200px; overflow: hidden; text-align: center;padding-top: 15%">
        <i class="fa fa-file-pdf-o" style="font-size:80px;color:red"></i>
        <div class="card-caption">
            @if(Request::is('admin/file'))
                <div class="col-md-6 col-xs-12">
                    <button class="btn btn-default btn-block" id="file-link{{$file->id}}" data-clipboard-text="{{ url('file/show/'.$file->id) }}">
                        <i class="fa fa-clone"></i>
                    </button>
                </div>
                <div class="col-md-6 col-xs-12" style="display: block">
                    <div class="col-md-6 col-xs-6">
                        <a href="{{ url('file/'.$file->id.'/edit') }}" class="btn btn-warning btn-block">
                            <span class="glyphicon glyphicon-wrench"></span>
                        </a>
                    </div>
                    <div class="col-md-6 col-xs-6">
                        {!! Form::model($file, ['method' => 'DELETE', 'url'=>'file/'.$file->id]) !!}
                        <button class="btn btn-danger btn-block" type="submit">
                            <span class="glyphicon glyphicon-remove-sign"></span>
                        </button>
                        {!! Form::close() !!}
                    </div>
                </div>
            @else
                <div class="col-md-12" style="display: block">
                    <div class="col-md-6 col-xs-6">
                        <button type="button" class="btn btn-default btn-block" id="image-link{{$file->id}}"
                                data-clipboard-text="{{ url('file/show/'.$file->id) }}">
                            <i class="fa fa-clone"></i>
                        </button>
                    </div>
                    <div class="col-md-6 col-xs-6">
                        <a href="{{ url('file/'.$file->id.'/edit') }}" class="btn btn-warning btn-block">
                            <span class="glyphicon glyphicon-wrench"></span>
                        </a>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <script>
        new Clipboard('#file-link{{$file->id}}');
    </script>
</div>