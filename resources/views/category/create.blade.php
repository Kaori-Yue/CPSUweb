@extends('admin.index')

@section('show')
    {!! Form::open(['url' => 'category', 'class' => 'form-horizontal', 'files' => 'true']) !!}
    @include('category._form', ['form_header' => 'Create Category', 'submit_text' => 'Create'])
    {!! Form::close() !!}
@endsection