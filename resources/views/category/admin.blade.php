@extends('admin.index')

@section('show')
    <div class="col-md-12 row-card" style="padding: 1%">
        <div class="col-md-12" style="padding: 0">
            <a class="btn btn-primary btn-block btn-lg" href="{{ url('admin/category/create') }}">Create</a>
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
        @foreach($categories as $category)
            @include('category._card', $category)
        @endforeach
    </div>
@endsection