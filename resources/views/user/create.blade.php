@extends('admin.index')

@section('show')
    {!! Form::open(['url' => 'user', 'class' => 'form-horizontal', 'files' => 'true']) !!}
    @include('user._form', ['form_header' => 'Create User', 'submit_text' => 'Create'])
    {!! Form::close() !!}
@endsection