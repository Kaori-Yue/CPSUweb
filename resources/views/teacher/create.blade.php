@extends('admin.index')

@section('show')
    {!! Form::open(['url' => 'teacher', 'class' => 'form-horizontal', 'files' => 'true']) !!}
    @include('teacher._form', ['header_text' => 'Create Teacher', 'submit_text' => 'Create'])
    {!! Form::close() !!}
@endsection