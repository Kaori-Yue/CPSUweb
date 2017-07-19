@extends('admin.index')

@section('show')
    <div class="row-card col-md-12" style="padding: 1%">
        <div class="col-md-8" style="padding: 0">
            <a class="btn btn-primary btn-block btn-lg" href="{{ url('admin/teacher/create') }}">Create</a>
        </div>

        <div class="col-md-4" style="padding: 0; text-align: left">
            <div class="dropdown">
                <button class="btn btn-default btn-block btn-lg dropdown-toggle" type="button" data-toggle="dropdown">
                    @if(Request::is('*/duty'))
                        Duty
                    @elseif(Request::is('*/retire'))
                        Retire
                    @elseif(Request::is('*/study'))
                        Study
                    @elseif(Request::is('*/disable'))
                        Disable
                    @else
                        All Teacher
                    @endif
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ url('admin/teacher') }}" class="btn btn-default btn-lg">
                            All
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('admin/teacher/filter/duty') }}" class="btn btn-default btn-lg">
                            Duty
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('admin/teacher/filter/retire') }}" class="btn btn-default btn-lg">
                            Retire
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('admin/teacher/filter/study') }}" class="btn btn-default btn-lg">
                            Study
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('admin/teacher/filter/disable') }}" class="btn btn-default btn-lg">
                            Disable
                        </a>
                    </li>
                </ul>
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
@endsection