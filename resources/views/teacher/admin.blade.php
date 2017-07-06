@extends('admin.index')

@section('show')
    <div class="row-card col-md-12" style="padding: 1%">
        <div class="col-md-8" style="padding: 0">
            <a class="btn btn-primary btn-block" href="{{ url('admin/teacher/create') }}">Create</a>
        </div>

        <div class="col-md-4" style="padding: 0; text-align: left;display: inline">
            <div class="btn-group btn-group-justified">
                <a href="{{ url('admin/teacher') }}" class="btn btn-default">
                    All
                </a>
                <a href="{{ url('admin/teacher/filter/duty') }}" class="btn btn-default">
                    Duty
                </a>
                <a href="{{ url('admin/teacher/filter/retire') }}" class="btn btn-default">
                    Retire
                </a>
                <a href="{{ url('admin/teacher/filter/study') }}" class="btn btn-default">
                    Study
                </a>
                {{--<a href="{{ url('admin/teacher/filter/disable') }}" class="btn btn-default">
                    disable
                </a>--}}
            </div>
        </div>
    </div>

    @if(session('status'))
    <div class="col-md-12 row-card" style="padding: 1%">
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    </div>
    @endif

    <div class="col-md-12" style="padding: 0">
        @foreach($teachers as $teacher)
        @include('teacher._card', $teacher)
        @endforeach
    </div>
@stop