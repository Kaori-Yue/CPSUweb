@extends('admin.index')

@section('show')
    {!! Form::open(['url' => 'research', 'class' => 'form-horizontal', 'files' => 'true']) !!}
    @include('research._form', ['submit_text' => 'Create', 'teachers' => $teachers])
    {!! Form::close() !!}
@endsection