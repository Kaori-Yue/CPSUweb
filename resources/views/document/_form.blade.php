<div class="panel panel-primary">
    <div class="panel-heading">
        <h1>{{ $form_header }}</h1>
    </div>
    <div class="panel-body">
        <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
            {!! Form::label('file', 'File') !!}
            {!! Form::file('file', ['class' => 'form-control']) !!}
            @if ($errors->has('file'))
                <span class="help-block">
                    <strong>{{ $errors->first('file') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
            {!! Form::label('description', 'Description') !!}
            {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
            @if ($errors->has('description'))
                <span class="help-block">
                    <strong>{{ $errors->first('description') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
            {!! Form::label('category', 'Category') !!}
            {!! Form::text('category', null, ['class' => 'form-control']) !!}
            @if ($errors->has('category'))
                <span class="help-block">
                    <strong>{{ $errors->first('category') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
            {!! Form::label('status', 'Status') !!}
            @if(isset($curricula))
                {!! Form::select('status', $status, $document->status, ['class' => 'form-control']) !!}
            @else
                {!! Form::select('status', $status, null, ['class' => 'form-control']) !!}
            @endif
            @if ($errors->has('status'))
                <span class="help-block">
                    <strong>{{ $errors->first('status') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="panel-footer">
        {!! Form::submit($submit_text, ['class' => 'btn btn-primary btn-lg']) !!}
    </div>
</div>