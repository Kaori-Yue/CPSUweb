@extends('admin.index')

@section('show')
    <div class="row-card col-md-12" style="padding: 1%">
        <div class="col-md-8" style="padding: 0">
            <a class="btn btn-primary btn-block" href="{{ url('admin/staff/create') }}">Create</a>
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
@stop