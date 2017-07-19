@extends('admin.index')

@section('show')
    <div class="col-md-12 row-card" style="padding: 1%">
        <div class="col-md-8" style="padding: 0">
            <a class="btn btn-primary btn-block btn-lg" href="{{ url('admin/curricula/create') }}">Create</a>
        </div>

        <div class="col-md-4" style="padding: 0; text-align: left">
            <div class="dropdown">
                <button class="btn btn-default btn-block btn-lg dropdown-toggle" type="button" data-toggle="dropdown">
                    @if(Request::is('*/enable'))
                        Enable
                    @elseif(Request::is('*/disable'))
                        Disable
                    @else
                        All Curricula
                    @endif
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ url('admin/curricula') }}" class="btn btn-default btn-lg">
                            All
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('admin/curricula/filter/enable') }}" class="btn btn-default btn-lg">
                            Enable
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('admin/curricula/filter/disable') }}" class="btn btn-default btn-lg">
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

    <div class="row col-md-12" style="padding: 0;background: #ffffff">
        @foreach($curriculas as $curricula)
            @include('curricula._card', $curricula)
        @endforeach
    </div>
@endsection