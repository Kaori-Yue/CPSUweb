@extends('admin.index')

@section('show')
    <div class="col-md-12 row-card" style="padding: 1%">
        <div class="col-md-8" style="padding: 0">
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
    <div class="row row-card com-md-4">
    @foreach($thesis as $t)
        <div class="well-lg">
            <h4>{{ $t->name }}</h4>
        </div>
        {{--<h4>{{ $loop->iteration }}. {{ $t->name }}</h4>--}}
    @endforeach
    </div>
@endsection