@extends('admin.index')

@section('show')
    @include('research._form', ['url' => 'research', 'submit_text' => 'Create'])
@stop