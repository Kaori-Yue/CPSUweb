@extends('admin.index')

@section('show')
    {!! Form::model($teacher, ['url' => 'teacher/'.$teacher->id, 'method' => 'PATCH',
        'class' => 'form-horizontal', 'files' => 'true', 'id' => 'teacher_edit']) !!}
    @include('teacher._form', ['header_text' => 'Edit Teacher', 'submit_text' => 'Finish'])
    {!! Form::close() !!}
@endsection