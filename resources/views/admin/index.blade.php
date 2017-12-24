@extends('main')

@section('content')
    <div class="container">
        @if(!Request::is('admin'))
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

                    <a href="{{ url('admin/news') }}" class="
                    @if (Request::is('admin/news/*'))btn btn-success
                    @elseif(Request::is('admin/news'))btn btn-success
                    @elseif(Request::is('news/*/edit'))btn btn-success
                    @else btn btn-default @endif ">
                        News
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

                    <a href="{{ url('admin/user') }}" class="
                    @if (Request::is('admin/user/*'))btn btn-success
                    @elseif(Request::is('admin/user'))btn btn-success
                    @elseif(Request::is('user/*/edit'))btn btn-success
                    @else btn btn-default @endif ">
                        User
                    </a>
                </div>
            </div>

            <div class="col-md-12 col-xs-12" style="padding-left: 0;padding-right: 0">
                <div class="btn-group btn-group-justified">
                    <a href="{{ url('admin/document') }}" class="
                    @if (Request::is('admin/document/*'))btn btn-success
                    @elseif(Request::is('admin/document'))btn btn-success
                    @elseif(Request::is('document/*/edit'))btn btn-success
                    @else btn btn-default @endif ">
                        Document
                    </a>

                    <a href="{{ url('admin/category') }}" class="
                    @if (Request::is('admin/category/*'))btn btn-success
                    @elseif(Request::is('admin/category'))btn btn-success
                    @elseif(Request::is('user/*/edit'))btn btn-success
                    @else btn btn-default @endif ">
                        Category
                    </a>
                </div>
            </div>
        </div>
        @endif
        <div class="row">
            <div class="col-md-12 col-xs-12 content-card">
                @yield('show')
            </div>
        </div>
    </div>
@stop