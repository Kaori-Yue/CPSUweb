@extends('main')

@section('content')
    <div class="container">
        <div class="row row-card">
            <h2 class="secondary-section-heading">Dashboard</h2>
            <a href="{{ url('teacher/blog') }}">
                <div class="col-md-3" style="padding: 1%">
                    <div class="panel panel-danger" style="box-shadow: 1px 1px 5px #888888;">
                        <div class="panel-heading">
                            <i class="material-icons" style="font-size:48px">assignment</i>
                            <h3>ข่าว ประกาศ</h3>
                        </div>

                        <div class="panel-body">
                            เขียนข่าว และประกาศใหม่
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ url('document/category/แบบฟอร์มทั่วไป') }}">
                <div class="col-md-3" style="padding: 1%">
                    <div class="panel panel-success" style="box-shadow: 1px 1px 5px #888888;">
                        <div class="panel-heading">
                            <i class="material-icons" style="font-size:48px">assignment</i>
                            <h3>Education Form</h3>
                        </div>

                        <div class="panel-body">
                            แบบฟอร์มทั่วไป
                        </div>
                    </div>
                </div>
            </a>

            <a href="{{ url('document/category/แบบฟอร์มโครงงานปริญญานิพนธ์(1)') }}">
                <div class="col-md-3" style="padding: 1%">
                    <div class="panel panel-primary" style="box-shadow: 1px 1px 5px #888888;">
                        <div class="panel-heading">
                            <i class="material-icons" style="font-size:48px">library_books</i>
                            <h3>Project 1 Form</h3>
                        </div>

                        <div class="panel-body">
                            แบบฟอร์มสำหรับจัดทำโครงงานปริญญานิพนธ์ 1
                        </div>
                    </div>
                </div>
            </a>

            <a href="{{ url('document/category/แบบฟอร์มโครงงานปริญญานิพนธ์(2)') }}">
                <div class="col-md-3" style="padding: 1%">
                    <div class="panel panel-warning" style="box-shadow: 1px 1px 5px #888888;">
                        <div class="panel-heading">
                            <i class="material-icons" style="font-size:48px">library_books</i>
                            <h3>Project 2 Form</h3>
                        </div>

                        <div class="panel-body">
                            แบบฟอร์มสำหรับจัดทำโครงงานปริญญานิพนธ์ 2
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection