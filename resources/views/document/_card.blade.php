<div class="col-md-4 col-sm-6 col-xs-12" style="padding: 1%;">
    <div class="document-card">
        <div class="document-content col-md-12">
            <h2>
                {{ $document->name }}
            </h2>
            <p>{{ $document->description }}</p>
            <hr>
            <div class="col-md-12" style="padding: 0;margin: 0">
                <a href="" class="btn btn-success btn-block">Download</a>
            </div>

            @if(Request::is('admin/*'))
            <div class="col-md-12" style="padding: 0;margin: 0">
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <a href="{{ url('document/'.$document->id.'/edit') }}" class="btn btn-warning btn-block">
                        Edit
                        <span class="glyphicon glyphicon-wrench"></span>
                    </a>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    {!! Form::model($document, ['method' => 'DELETE', 'url'=>'document/'.$document->id]) !!}
                    <button class="btn btn-danger btn-block" type="submit">
                        Delete
                        <span class="glyphicon glyphicon-remove-sign"></span>
                    </button>
                    {!! Form::close() !!}
                </div>
            </div>
            @endif
        </div>
    </div>
</div>