@extends('admin.index')

@section('show')
    {!! Form::model($document, ['url' => 'document/'.$document->id, 'method' => 'PATCH',
        'class' => 'form-horizontal', 'files' => 'true']) !!}
    @include('document._form', ['form_header' => 'Edit Document', 'submit_text' => 'Finish'])
    {!! Form::close() !!}
@endsection