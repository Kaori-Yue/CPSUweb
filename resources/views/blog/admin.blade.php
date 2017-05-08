@extends('admin.index')

@section('show')
    <div class="row col-md-12" style="background: #ffffff;padding: 1%">
        <div class="col-md-8" style="padding: 0">
            <a class="btn btn-primary btn-block" href="{{ url('admin/blog/create') }}">Create</a>
        </div>

        <div class="col-md-4" style="padding: 0; text-align: left">
            {!! Form::open(['url' => 'admin/blog/sort', 'class' => 'form-inline']) !!}
            <div class="form-group">
                {!! Form::select('sort_by', $orderOptions, null, ['class' => 'form-control']) !!}
            </div>
            {!! Form::submit('Sort', ['class' => 'btn btn-default']) !!}
            {!! Form::close() !!}
        </div>
    </div>

    <div class="col-md-12" style="padding: 0">
        @foreach($blogs as $blog)
        @include('blog._card', $blog)
        @endforeach
    </div>
@stop