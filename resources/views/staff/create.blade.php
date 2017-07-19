@extends('admin.index')

@section('show')
    {!! Form::open(['url' => 'staff', 'class' => 'form-horizontal', 'files' => 'true']) !!}
    @include('staff._form', ['header_text' => 'Create Staff', 'submit_text' => 'Create'])
    {!! Form::close() !!}
@endsection