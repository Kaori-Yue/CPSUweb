<div class="panel panel-primary">
    <div class="panel-heading">
        <h1>Create Research</h1>
    </div>
    <div class="panel-body">
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('owner') ? ' has-error' : '' }}">
            {!! Form::label('owner', 'Owner') !!}
            {!! Form::text('owner', null, ['class' => 'form-control']) !!}
            @if ($errors->has('owner'))
                <span class="help-block">
                    <strong>{{ $errors->first('owner') }}</strong>
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

        <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
            {!! Form::label('file', 'File') !!}
            {!! Form::file('file', ['class' => 'form-control']) !!}
            @if ($errors->has('file'))
                <span class="help-block">
                    <strong>{{ $errors->first('file') }}</strong>
                </span>
            @endif
        </div>

        @for($i = 1; $i <= 5; $i++)
            @if($i == 3)
                <button type="button" class="btn btn-default btn-block btn-lg" data-toggle="collapse" data-target="#more">
                    More Image
                </button>
                <div id="more" class="collapse">
            @endif
                <hr>
                <div class="form-group">
                    {!! Form::label('image'.$i, 'Section '.$i. ' Image') !!}
                    {!! Form::file('image'.$i, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('name'.$i, 'Section '.$i. ' Name') !!}
                    {!! Form::text('name'.$i, null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('description'.$i, 'Section '.$i.' Description') !!}
                    {!! Form::textarea('description'.$i, null, ['class' => 'form-control']) !!}
                </div>
            @if($i == 5)
                </div>
            @endif
        @endfor
    </div>
    <div class="panel-footer">
        {!! Form::submit($submit_text, ['class' => 'btn btn-primary btn-lg']) !!}
    </div>
</div>
