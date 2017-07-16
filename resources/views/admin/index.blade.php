@extends('main')

@section('content')
    <div class="container">
        <div class="row" style="background: #CFD8DC;padding: 10px">
            <div class="col-md-12 col-xs-12" style="padding-left: 0;padding-right: 0">
                <div class="btn-group btn-group-justified">
                    <a href="{{ url('admin') }}" class="
                    @if (Request::is('admin'))btn btn-success
                    @else btn btn-default @endif ">
                        Home
                    </a>

                    <a href="{{ url('admin/curricula') }}" class="
                    @if (Request::is('admin/curricula/*'))btn btn-success
                    @elseif(Request::is('admin/curricula'))btn btn-success
                    @elseif(Request::is('curricula/*/edit'))btn btn-success
                    @else btn btn-default @endif ">
                        Curricula
                    </a>

                    <a href="{{ url('admin/blog') }}" class="
                    @if (Request::is('admin/blog/*'))btn btn-success
                    @elseif(Request::is('admin/blog'))btn btn-success
                    @elseif(Request::is('blog/*/edit'))btn btn-success
                    @else btn btn-default @endif ">
                        Blog
                    </a>
                </div>
            </div>

            <div class="col-md-12 col-xs-12" style="padding-left: 0;padding-right: 0">
                <div class="btn-group btn-group-justified">
                    <a href="{{ url('admin/teacher') }}" class="
                    @if (Request::is('admin/teacher/*'))btn btn-success
                    @elseif(Request::is('admin/teacher'))btn btn-success
                    @elseif(Request::is('teacher/*/edit'))btn btn-success
                    @else btn btn-default @endif ">
                        Teacher
                    </a>

                    <a href="{{ url('admin/staff') }}" class="
                    @if (Request::is('admin/staff/*'))btn btn-success
                    @elseif(Request::is('admin/staff'))btn btn-success
                    @elseif(Request::is('staff/*/edit'))btn btn-success
                    @else btn btn-default @endif ">
                        Staff
                    </a>

                    <a href="{{ url('admin/research') }}" class="
                    @if (Request::is('admin/research/*'))btn btn-success
                    @elseif(Request::is('admin/research'))btn btn-success
                    @elseif(Request::is('research/*/edit'))btn btn-success
                    @else btn btn-default @endif ">
                        Research
                    </a>
                </div>
            </div>

            <div class="col-md-12 col-xs-12" style="padding-left: 0;padding-right: 0">
                <div class="btn-group btn-group-justified">
                    <a href="{{ url('admin/image') }}" class="
                    @if (Request::is('admin/image/*'))btn btn-success
                    @elseif(Request::is('admin/image'))btn btn-success
                    @elseif(Request::is('image/*/edit'))btn btn-success
                    @else btn btn-default @endif ">
                        Image
                    </a>

                    <a href="{{ url('admin/file') }}" class="
                    @if (Request::is('admin/file/*'))btn btn-success
                    @elseif(Request::is('admin/file'))btn btn-success
                    @elseif(Request::is('file/*/edit'))btn btn-success
                    @else btn btn-default @endif ">
                        File
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-xs-12 content-card">
                @yield('show')
            </div>
        </div>
    </div>
@stop