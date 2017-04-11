@extends('admin.index')

@section('show')
    @include('teacher._form', ['url' => 'teacher', 'submit_text' => 'Create'])
@stop