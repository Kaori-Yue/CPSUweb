@extends('admin.index')

@section('show')
    {!! Form::open(['url' => 'img', 'class' => 'form-horizontal', 'files' => 'true']) !!}
    @include('image._form', ['form_header' => 'Upload Image', 'submit_text' => 'Upload'])
    {!! Form::close() !!}
@endsection