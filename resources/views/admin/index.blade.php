@extends('main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-12 sidebar">
                <div class="list-group">
                    <a href="{{ url('admin') }}" class="list-group-item">
                        Home
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                    <a href="{{ url('admin/blog') }}" class="list-group-item{{-- active--}}">
                        Announce/News
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                    <a href="{{ url('admin/teacher') }}" class="list-group-item">
                        Teacher
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                    <a href="#" class="list-group-item">
                        Research
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
            <div class="col-md-9 col-xs-12 content-card">
                @yield('show')
            </div>
        </div>
    </div>
@stop