@extends('admin.index')

@section('show')
    @include('thesis._form', ['url' => 'thesis', 'submit_text' => 'Create'])
@endsection