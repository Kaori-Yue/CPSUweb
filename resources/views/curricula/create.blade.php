@extends('admin.index')

@section('show')
    {!! Form::open(['url' => 'curricula', 'class' => 'form-horizontal', 'files' => 'true']) !!}
    @include('curricula._form', ['submit_text' => 'Create'])
    {!! Form::close() !!}
@stop