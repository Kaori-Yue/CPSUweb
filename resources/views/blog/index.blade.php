@extends('main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h1>Blog</h1>
                </div>
            </div>
        </div>
        @foreach($blogs as $blog)
            {!! $blog->title !!}
            {!! $blog->user->name !!}
            <br>
        @endforeach
    </div>
@stop