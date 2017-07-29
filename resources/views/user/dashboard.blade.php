@extends('main')

@section('content')
    <div class="container">
        <div class="row row-card">
            <a href="{{ url('dashboard/project_form') }}">
                <div class="col-md-3" style="padding: 1%">
                    <div class="panel panel-primary" style="box-shadow: 1px 1px 5px #888888;">
                        <div class="panel-heading">
                            <i class="material-icons" style="font-size:48px">library_books</i>
                            <h3>Project Form</h3>
                        </div>

                        <div class="panel-body">
                            แบบฟอร์มสำหรับจัดทำโครงงานปริญญานิพนธ์
                        </div>
                    </div>
                </div>
            </a>

            <div class="col-md-3" style="padding: 1%">
                <div class="panel panel-success" style="box-shadow: 1px 1px 5px #888888;">
                    <div class="panel-heading">
                        <i class="material-icons" style="font-size:48px">assignment</i>
                        <h3>Education Form</h3>
                    </div>

                    <div class="panel-body">
                        แบบฟอร์มเกี่ยวกับการศึกษาอื่นๆ
                    </div>
                </div>
            </div>

            <div class="col-md-3" style="padding: 1%">
                <div class="panel panel-warning"  style="box-shadow: 1px 1px 5px #888888;">
                    <div class="panel-heading">
                        <i class="material-icons" style="font-size:48px">library_books</i>
                        <h3>Blah Blah Form</h3>
                    </div>

                    <div class="panel-body">
                        แบบฟอร์มสำหรับจัดทำโครงงานปริญญานิพนธ์
                    </div>
                </div>
            </div>

            <div class="col-md-3" style="padding: 1%">
                <div class="panel panel-danger" style="box-shadow: 1px 1px 5px #888888;">
                    <div class="panel-heading">
                        <i class="material-icons" style="font-size:48px">library_books</i>
                        <h3>Blah Blah Form</h3>
                    </div>

                    <div class="panel-body">
                        แบบฟอร์มสำหรับจัดทำโครงงานปริญญานิพนธ์
                    </div>
                </div>
            </div>
        </div>

        <div class="row row-card col-md-12" style="height: 400px">
            <h3 class="secondary-section-heading">News For Students</h3>
        </div>
    </div>
@endsection