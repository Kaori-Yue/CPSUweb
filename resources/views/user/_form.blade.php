<div class="panel panel-primary">
    <div class="panel-heading">
        <h1>{{ $form_header }}</h1>
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
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            {!! Form::label('email', 'E-mail') !!}
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            {!! Form::label('password', 'Password') !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('confirm-password', 'Confirm Password') !!}
            {!! Form::password('confirm-password', ['class' => 'form-control']) !!}
        </div>

        <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
            {!! Form::label('role', 'Role') !!}
            @if(isset($user))
                {!! Form::select('role', $role, $user->role, ['class' => 'form-control']) !!}
            @else
                {!! Form::select('role', $role, null, ['class' => 'form-control']) !!}
            @endif
            @if ($errors->has('role'))
                <span class="help-block">
                    <strong>{{ $errors->first('role') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="panel-footer">
        {!! Form::submit($submit_text, ['class' => 'btn btn-primary btn-lg']) !!}
    </div>
</div>