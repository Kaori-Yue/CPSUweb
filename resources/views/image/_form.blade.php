<div class="panel panel-primary">
    <div class="panel-heading">
        <h1>{{ $form_header }}</h1>
    </div>
    <div class="panel-body">
        @if(Request::is('image/*/edit'))
            <div style="text-align: center" class="col-md-12">
                <img class="img-responsive img-thumbnail" src="{{ url('image/show/'.$image->id) }}" style="height: 200px" alt="">
                <br>
            </div>
        @endif
        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
            {!! Form::label('image', 'New Image') !!}
            {!! Form::file('image', ['class' => 'form-control']) !!}
            @if ($errors->has('image'))
                <span class="help-block">
                    <strong>{{ $errors->first('image') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
            {!! Form::label('type', 'Type') !!}
            {!! Form::select('type', $type, null, ['class' => 'form-control']) !!}
            @if ($errors->has('type'))
                <span class="help-block">
                    <strong>{{ $errors->first('type') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="panel-footer">
        {!! Form::submit($submit_text, ['class' => 'btn btn-primary btn-lg']) !!}
    </div>
</div>