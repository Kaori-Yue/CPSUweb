@extends('admin.index')

@section('show')
    <div class="col-md-12 row-card">
        <div class="col-md-8" style="padding: 0 1% 1% 0">
            <a class="btn btn-primary btn-block" href="{{ url('admin/thesis/create') }}">Create</a>
        </div>

        <div class="col-md-4" style="padding: 0 1% 1% 0; text-align: left">
            {{--{!! Form::open(['url' => 'admin/teacher/sort', 'class' => 'form-inline']) !!}
            <div class="form-group">
                {!! Form::select('sort_by', $orderOptions, null, ['class' => 'form-control']) !!}
            </div>
            {!! Form::submit('Sort', ['class' => 'btn btn-default']) !!}
            {!! Form::close() !!}--}}
        </div>
    </div>
    @foreach($thesis as $t)
        <div class="row row-card">
            <h4>{{ $loop->iteration }}. {{ $t->name }}</h4>
        </div>
    @endforeach
@stop