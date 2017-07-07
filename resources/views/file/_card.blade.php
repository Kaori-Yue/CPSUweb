<div class="col-md-3 col-sm-4 col-xs-6 row-card" style="padding: 1%;">
    <div class="card card-bg" style="height: 200px; overflow: hidden; text-align: center;padding-top: 10%; background:
    @if(strpos($file->mime, 'pdf'))
        #B22222
    @elseif(strpos($file->mime, 'wordprocess') || strpos($file->mime, 'msword'))
        #483D8B
    @elseif(strpos($file->mime, 'spreadsheet') || strpos($file->mime, 'ms-excel'))
        #2E8B57
    @elseif(strpos($file->mime, 'presentation') || strpos($file->mime, 'ms-powerpoint'))
        #FF7F50
    @elseif(strpos($file->mime, 'zip-compressed') || strpos($file->mime, 'rar-compressed') || strpos($file->mime, '7z-compressed'))
        #A0522D
    @elseif(strpos($file->mime, 'plain'))
        #A9A9A9
    @else
        #000000
    @endif
    ">
        @if(strpos($file->mime, 'pdf'))
            <i class="fa fa-file-pdf-o" style="font-size:80px"></i>

        @elseif(strpos($file->mime, 'wordprocess') || strpos($file->mime, 'msword'))
            <i class="fa fa-file-word-o" style="font-size:80px"></i>

        @elseif(strpos($file->mime, 'spreadsheet') || strpos($file->mime, 'ms-excel'))
            <i class="fa fa-file-excel-o" style="font-size:80px"></i>

        @elseif(strpos($file->mime, 'presentation') || strpos($file->mime, 'ms-powerpoint'))
            <i class="fa fa-file-powerpoint-o" style="font-size:80px"></i>

        @elseif(strpos($file->mime, 'zip-compressed') || strpos($file->mime, 'rar-compressed') || strpos($file->mime, '7z-compressed'))
            <i class="fa fa-file-archive-o" style="font-size:80px"></i>

        @elseif(strpos($file->mime, 'plain'))
            <i class="fa fa-file-text" style="font-size:80px"></i>

        @else
            <i class="fa fa-file-o" style="font-size:80px"></i>

        @endif
        <div class="card-caption" style="background: rgba(0, 0, 0, 0.4)">
            <p style="padding-bottom: 1%;margin-bottom: 0">{{ $file->original_name }}</p>
            @if(Request::is('admin/file'))
                <div class="col-md-6 col-xs-12">
                    <button class="btn btn-default btn-block" id="file-link{{$file->id}}"
                            data-clipboard-text="{{ url('file/show/'.$file->id) }}">
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
    {{--<script>
        new Clipboard('#file-link{{$file->id}}');
    </script>--}}
</div>