@extends('admin.index')

@section('show')
    {!! Form::model($curricula, ['url' => 'curricula/'.$curricula->id, 'method' => 'PATCH',
        'class' => 'form-horizontal', 'files' => 'true']) !!}
    @include('curricula._form', ['form_header' => 'Edit Curricula', 'submit_text' => 'Finish'])
    {!! Form::close() !!}
@endsection