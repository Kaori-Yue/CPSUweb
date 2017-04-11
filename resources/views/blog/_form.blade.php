{!! Form::open(['url' => $url, 'class' => 'form-horizontal', 'files' => 'true']) !!}
<div class="panel panel-primary">
    <div class="panel-heading">
        <h1>Create Blog</h1>
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
</div>
{!! Form::close() !!}