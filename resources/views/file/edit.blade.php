@extends('admin.index')

@section('show')
    {!! Form::model($file, ['url' => 'file/'.$file->id, 'method' => 'PATCH',
        'class' => 'form-horizontal', 'files' => 'true']) !!}
    @include('file._form', ['form_header' => 'Edit File', 'submit_text' => 'Finish'])
    {!! Form::close() !!}
@endsection