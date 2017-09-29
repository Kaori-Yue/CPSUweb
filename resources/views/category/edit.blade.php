@extends('admin.index')

@section('show')
    {!! Form::model($category, ['url' => 'category/'.$category->id, 'method' => 'PATCH',
        'class' => 'form-horizontal', 'files' => 'true']) !!}
    @include('category._form', ['form_header' => 'Edit Category', 'submit_text' => 'Finish'])
    {!! Form::close() !!}
@endsection