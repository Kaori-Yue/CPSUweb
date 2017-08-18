@extends('admin.index')

@section('show')
    {!! Form::open(['url' => 'document', 'class' => 'form-horizontal', 'files' => 'true']) !!}
    @include('document._form', ['form_header' => 'New Document', 'submit_text' => 'Create'])
    {!! Form::close() !!}
@endsection