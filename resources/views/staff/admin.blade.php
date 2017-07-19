@extends('admin.index')

@section('show')
    <div class="row-card col-md-12" style="padding: 1%">
        <div class="col-md-8" style="padding: 0">
            <a class="btn btn-primary btn-block btn-lg" href="{{ url('admin/staff/create') }}">Create</a>
        </div>
        <div class="col-md-4" style="padding: 0; text-align: left">
            <div class="dropdown">
                <button class="btn btn-default btn-block btn-lg dropdown-toggle" type="button" data-toggle="dropdown">
                    @if(Request::is('*/duty'))
                        Duty
                    @elseif(Request::is('*/disable'))
                        Retire
                    @else
                        All Staff
                    @endif
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ url('admin/staff') }}" class="btn btn-default btn-lg">
                            All
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('admin/staff/filter/duty') }}" class="btn btn-default btn-lg">
                            Duty
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('admin/staff/filter/disable') }}" class="btn btn-default btn-lg">
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
        @foreach($staffs as $staff)
            @include('staff._card', $staff)
        @endforeach
    </div>
@endsection