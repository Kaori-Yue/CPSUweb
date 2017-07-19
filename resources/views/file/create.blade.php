@extends('admin.index')

@section('show')
    {!! Form::open(['url' => 'file', 'class' => 'form-horizontal', 'files' => 'true']) !!}
    @include('file._form', ['form_header' => 'Upload File', 'submit_text' => 'Upload'])
    {!! Form::close() !!}
@endsection