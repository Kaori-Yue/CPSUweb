<div class="panel panel-primary">
    <div class="panel-heading">
        <h1>{{ $header_text }}</h1>
    </div>
    <div class="panel-body">
        <div class="form-group">
            {!! Form::label('cover', 'Cover Image') !!}
            {!! Form::file('cover', ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('title', 'Title') !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('content', 'Content') !!}
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">Image</button>
            {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('hash_tags', 'HashTag (Separate by comma if multiple)') !!}
            {!! Form::text('hash_tags', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('publish_date', 'Publish Date') !!}
            {!! Form::date('publish_date', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('publish_time', 'Publish Time') !!}
            {!! Form::time('publish_time', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('status', 'Status') !!}
            {!! Form::select('status', $status, null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('category_id', 'Category') !!}
            {!! Form::select('category_id', $category, null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="panel-footer">
        {!! Form::submit($submit_text, ['class' => 'btn btn-primary btn-lg']) !!}
        {!! Form::reset('Reset', ['class' => 'btn btn-default btn-lg']) !!}
    </div>

    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Upload Image</h4>
                </div>
                <div class="modal-body">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
                        <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
                        <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
                            <h3>HOME</h3>
                            <p>Some content.</p>
                        </div>
                        <div id="menu1" class="tab-pane fade">
                            <h3>Menu 1</h3>
                            <p>Some content in menu 1.</p>
                        </div>
                        <div id="menu2" class="tab-pane fade">
                            <h3>Menu 2</h3>
                            <p>Some content in menu 2.</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
