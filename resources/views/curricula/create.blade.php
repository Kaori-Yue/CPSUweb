@extends('admin.index')

@section('show')
    {!! Form::open(['url' => 'curricula', 'class' => 'form-horizontal', 'files' => 'true']) !!}
    @include('curricula._form', ['form_header' => 'Create Curricula', 'submit_text' => 'Create'])
    {!! Form::close() !!}
@endsection