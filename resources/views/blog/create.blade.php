@extends('admin.index')

@section('show')
    {!! Form::open(['url' => 'blog', 'class' => 'form-horizontal', 'files' => 'true']) !!}
    @include('blog._form', ['header_text' => 'Create Blog', 'submit_text' => 'Create'])
    {!! Form::close() !!}
@stop