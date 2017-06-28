<div class="col-md-3 col-sm-4 col-xs-6 row-card" style="padding: 1%;">
    <div class="card card-bg" style="background-image: url('{{ url('image/thumbnail/'.$image->id) }}'); height: 200px; overflow: hidden">
        <div class="card-caption">
            <div class="col-md-6 col-xs-12">
                <button class="btn btn-default btn-block" id="image-link{{$image->id}}" data-clipboard-text="{{ url('image/show/'.$image->id) }}">
                    <i class="fa fa-clone"></i>
                </button>
            </div>
            <div class="col-md-6 col-xs-12" style="display: block">
                <div class="col-md-6 col-xs-6">
                    <a href="{{ url('image/'.$image->id.'/edit') }}" class="btn btn-warning btn-block">
                        <span class="glyphicon glyphicon-wrench"></span>
                    </a>
                </div>
                <div class="col-md-6 col-xs-6">
                    {!! Form::model($image, ['method' => 'DELETE', 'url'=>'image/'.$image->id]) !!}
                    <button class="btn btn-danger btn-block" type="submit">
                        <span class="glyphicon glyphicon-remove-sign"></span>
                    </button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <script>
        new Clipboard('#image-link{{$image->id}}');
    </script>
</div>
