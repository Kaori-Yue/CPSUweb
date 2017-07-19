@extends('admin.index')

@section('show')
    {!! Form::model($image, ['url' => 'image/'.$image->id, 'method' => 'PATCH',
        'class' => 'form-horizontal', 'files' => 'true']) !!}
    @include('image._form', ['form_header' => 'Edit Image', 'submit_text' => 'Finish'])
    {!! Form::close() !!}
@endsection