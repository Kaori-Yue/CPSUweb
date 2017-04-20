@extends('admin.index')

@section('show')
    {!! Form::model($blog, ['url' => 'blog/'.$blog->id, 'method' => 'PATCH',
        'class' => 'form-horizontal', 'files' => 'true']) !!}
    @include('blog._form', ['header_text' => 'Edit Blog', 'submit_text' => 'Finish'])
    {!! Form::close() !!}
@stop