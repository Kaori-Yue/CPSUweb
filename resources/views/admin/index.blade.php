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
                    <a href="{{ url('admin/curricula') }}" class="list-group-item
                        @if (Request::is('admin/curricula/*') || Request::is('admin/curricula') || Request::is('curricula/*/edit')) active @endif">
                        Curricula
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                    <a href="{{ url('admin/blog') }}" class="list-group-item
                        @if (Request::is('admin/blog/*') || Request::is('admin/blog') || Request::is('blog/*/edit')) active @endif">
                        Announce/News
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                    <a href="{{ url('admin/teacher') }}" class="list-group-item
                        @if (Request::is('admin/teacher/*') || Request::is('admin/teacher') || Request::is('teacher/*/edit')) active @endif">
                        Teacher
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                    <a href="{{ url('admin/research') }}" class="list-group-item
                        @if (Request::is('admin/research/*') || Request::is('admin/research') || Request::is('research/*/edit')) active @endif">
                        Research
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                    <a href="{{ url('admin/thesis') }}" class="list-group-item
                        @if (Request::is('admin/thesis/*') || Request::is('admin/thesis') || Request::is('thesis/*/edit')) active @endif">
                        Thesis
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