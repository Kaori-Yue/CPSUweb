@extends('admin.index')

@section('head')
    <script src="{{ URL::asset('js/clipboard/dist/clipboard.min.js') }}"></script>
@stop

@section('show')
    <div class="col-md-12 row-card" style="padding: 1%">
        <div class="col-md-8" style="padding: 0">
            <a class="btn btn-primary btn-block" href="{{ url('admin/image/create') }}">Upload</a>
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

    @if(session('status'))
        <div class="col-md-12 row-card" style="padding: 1%">
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        </div>
    @endif

    <div class="row col-md-12" style="padding: 0;background: #ffffff">
        @foreach($images as $image)
        @include('image._card')
        @endforeach
        <div class="col-md-12" style="text-align: center;">
            {{ $images->links() }}
        </div>
    </div>
@stop