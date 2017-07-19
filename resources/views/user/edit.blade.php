@extends('admin.index')

@section('show')
    {!! Form::model($user, ['url' => 'user/'.$user->id, 'method' => 'PATCH',
        'class' => 'form-horizontal', 'files' => 'true']) !!}
    @include('user._form', ['form_header' => 'Edit User', 'submit_text' => 'Finish'])
    {!! Form::close() !!}
@endsection