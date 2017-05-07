@extends('admin.index')

@section('show')
    <div class="col-md-12 row-card">
        <div class="col-md-8" style="padding: 0 1% 0 0">
            <a class="btn btn-primary btn-block" href="{{ url('admin/curricula/create') }}">Create</a>
        </div>

        {{--<div class="col-md-4" style="padding: 0; text-align: left">
            {!! Form::open(['url' => 'admin/curricula/sort', 'class' => 'form-inline']) !!}
            <div class="form-group">
                {!! Form::select('sort_by', $orderOptions, null, ['class' => 'form-control']) !!}
            </div>
            {!! Form::submit('Sort', ['class' => 'btn btn-default']) !!}
            {!! Form::close() !!}
        </div>--}}
    </div>

    <div class="row col-md-12" style="background: #ffffff;padding: 0">
        @foreach($curriculas as $curricula)
            @include('curricula._card', $curricula)
        @endforeach
    </div>
@stop