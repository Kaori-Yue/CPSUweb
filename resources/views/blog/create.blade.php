@extends('main')

@section('content')
    <div class="container">
        <div class="row">
            {!! Form::open(['url' => 'blog', 'class' => 'form-horizontal', 'files' => 'true']) !!}
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h1>Create Blog</h1>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        {!! Form::label('title', 'Title') !!}
                        {!! Form::text('title', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('content', 'Content') !!}
                        {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('publish_at', 'Publish At') !!}
                        {!! Form::date('publish_at', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('cover', 'Cover Image') !!}
                        {!! Form::file('cover', ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('status', 'Status') !!}
                        {!! Form::select('status', $status, null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('category_id', 'Category') !!}
                        {!! Form::select('category_id', $category, null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="panel-footer">
                    {!! Form::submit('Finish', ['class' => 'btn btn-primary btn-lg']) !!}
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop