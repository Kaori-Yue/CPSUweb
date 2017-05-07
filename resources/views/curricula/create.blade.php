@extends('admin.index')

@section('show')
    @include('curricula._form', ['url' => 'curricula', 'submit_text' => 'Create'])
@stop