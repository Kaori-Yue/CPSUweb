@extends('admin.index')

@section('show')
    @include('blog._form', ['url' => 'blog', 'submit_text' => 'Create'])
@stop