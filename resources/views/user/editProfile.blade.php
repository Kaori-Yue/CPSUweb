@extends('main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="profile-card">
                @if($user->role == 'admin')
                    <img src="{{ URL::asset('image/archangel.jpg') }}" alt="{{ $user->name }}" style="width:100%">
                @elseif($user->role == 'teacher')
                    <img src="{{ url('image/show/'.$teacher->image) }}" alt="{{ $user->name }}" style="width:100%">
                @else
                    <img src="{{ URL::asset('image/groot.gif') }}" alt="{{ $user->name }}" style="width:100%">
                @endif
                <div class="profile-content" style="margin: 2%">
                    {!! Form::model($user, ['url' => 'user/update', 'method' => 'POST', 'class' => 'form-horizontal', 'files' => 'true']) !!}

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

                    <hr>
                    <hr>

                    <div class="form-group{{ $errors->has('current_password') ? ' has-error' : '' }}">
                        {!! Form::label('current_password', 'Current Password') !!}
                        {!! Form::password('current_password', ['class' => 'form-control']) !!}
                        @if ($errors->has('current_password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('current_password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('new_password') ? ' has-error' : '' }}">
                        {!! Form::label('new_password', 'New Password') !!}
                        {!! Form::password('new_password', ['class' => 'form-control']) !!}
                        @if ($errors->has('new_password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('new_password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('new_password_confirm') ? ' has-error' : '' }}">
                        {!! Form::label('new_password_confirm', 'Confirm New Password') !!}
                        {!! Form::password('new_password_confirm', ['class' => 'form-control']) !!}
                        @if ($errors->has('new_password_confirm'))
                            <span class="help-block">
                                <strong>{{ $errors->first('new_password_confirm') }}</strong>
                            </span>
                        @endif
                    </div>

                    {!! Form::submit('Finish', ['class' => 'btn btn-primary btn-lg']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection