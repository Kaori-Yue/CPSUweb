@extends('admin.index')

@section('show')
    {!! Form::model($staff, ['url' => 'staff/'.$staff->id, 'method' => 'PATCH',
        'class' => 'form-horizontal', 'files' => 'true']) !!}
    @include('staff._form', ['header_text' => 'Edit Staff', 'submit_text' => 'Finish'])
    {!! Form::close() !!}
@endsection