@extends('admin.index')

@section('show')
    <div class="row-card col-md-12" style="padding: 1%">
        <div class="col-md-8" style="padding: 0">
            <a class="btn btn-primary btn-block" href="{{ url('admin/blog/create') }}">Create</a>
        </div>

        {{--<div class="col-md-4" style="padding: 0; text-align: left">
            {!! Form::open(['url' => 'admin/blog/sort', 'class' => 'form-inline']) !!}
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

    <div class="col-md-12" style="padding: 0">
        @foreach($blogs as $blog)
        @include('blog._bcard', $blog)
        @endforeach
    </div>

    <div class="col-md-12" style="text-align: center">
        <?php echo $blogs->render(); ?>
    </div>
@stop