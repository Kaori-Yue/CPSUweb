{!! Form::open(['url' => $url, 'class' => 'form-horizontal', 'files' => 'true']) !!}
<div class="panel panel-primary">
    <div class="panel-heading">
        <h1>Create Research</h1>
    </div>
    <div class="panel-body">
        <div class="form-group">
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('description', 'Description') !!}
            {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('file', 'File') !!}
            {!! Form::file('file', ['class' => 'form-control']) !!}
        </div>
        @for($i = 1; $i <= 5; $i++)
        <hr>
        <div class="form-group">
            {!! Form::label('image'.$i, 'Image '.$i) !!}
            {!! Form::file('image'.$i, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('image_description'.$i, 'Image '.$i.' Description') !!}
            {!! Form::textarea('image_description'.$i, null, ['class' => 'form-control']) !!}
        </div>
        @endfor
    </div>
    <div class="panel-footer">
        {!! Form::submit($submit_text, ['class' => 'btn btn-primary btn-lg']) !!}
    </div>
</div>
{!! Form::close() !!}