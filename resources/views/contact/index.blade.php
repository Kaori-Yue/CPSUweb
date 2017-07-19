@extends('main')

@section('content')
    <div class="container">

        <div class="row col-md-12" style="background: #ffffff; text-align: center">
            <div class="well well-lg">
                <h1 style="padding: 2%">ติดต่อภาควิชา</h1>
            </div>
        </div>

        <div id="address" class="col-xs-12 some-space hidden-md"></div>

        <div class="row row-card" style="padding: 1%">
            <div style="text-align: left">
                <h2 class="primary-section-heading">ที่อยู่</h2>
            </div>
            <div class="col-md-12 address-card">
                <div class="col-md-6 address-content">
                    <h4><b>ภาควิชาคอมพิวเตอร์</b></h4>
                    <p>คณะวิทยาศาสตร์, มหาวิทยาลัยศิลปากร</p>
                    <p>วิทยาเขตพระราชวังสนามจันทร์</p>
                    <p>ถนนราชมรรคาใน</p>
                    <p>อำเภอเมืองฯ</p>
                    <p>จังหวัดนครปฐม</p>
                    <p>73000</p>
                </div>
                <div class="col-md-6 address-content">
                    <h4><b>Department of Computing</b></h4>
                    <p>Faculty of Science, Silpakorn University</p>
                    <p>Sanam Chandra Palace Campus</p>
                    <p>Rajamunka-nai Rd.</p>
                    <p>Muang District</p>
                    <p>Nakhon Pathom</p>
                    <p>73000</p>
                </div>
            </div>
        </div>

        <div id="telephone" class="col-xs-12 some-space hidden-md"></div>

        <div class="row row-card" style="padding: 1%">
            <div style="text-align: left">
                <h2 class="primary-section-heading">โทรศัพท์</h2>
            </div>
            <div class="col-md-12" style="padding: 10px;">
                <table class="table table-striped table-bordered" style="box-shadow: 1px 1px 3px #888888;">
                    <thead>
                        <tr>
                            <th>รายการ</th>
                            <th>หมายเลข</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>เบอร์ตรงภาควิชาฯ</td>
                            <td>0-3424-5334-5<br>0-3427-2923</td>
                        </tr>
                        <tr>
                            <td>เบอร์กลางคณะฯ</td>
                            <td>0-3425-5093</td>
                        </tr>
                        <tr>
                            <td>เบอร์กลางมหาวิทยาลัย</td>
                            <td>0-3425-3910-19<br>0-3425-3840-4</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div id="fax" class="col-xs-12 some-space hidden-md"></div>

        <div class="row row-card" style="padding: 1%">
            <div style="text-align: left">
                <h2 class="primary-section-heading">โทรสาร</h2>
            </div>
            <div class="col-md-12" style="padding: 10px">
                <table class="table table-striped table-bordered" style="box-shadow: 1px 1px 3px #888888;">
                    <thead>
                    <tr>
                        <th>รายการ</th>
                        <th>หมายเลข</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>ภาควิชาฯ</td>
                        <td>0-3427-2923</td>
                    </tr>
                    <tr>
                        <td>คณะฯ</td>
                        <td>0-3425-5820</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div id="map" class="col-xs-12 some-space hidden-md"></div>

        <div class="row row-card" style="padding: 1%">
            <div style="text-align: left">
                <h2 class="primary-section-heading">แผนที่</h2>
            </div>
            <div class="col-md-12 google-maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3874.327430244856!2d100.03898761495437!3d13.81936679030376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e2e5cbe1eb3a3d%3A0x10d91d1f54fe92b3!2z4LiE4LiT4Liw4Lin4Li04LiX4Lii4Liy4Lio4Liy4Liq4LiV4Lij4LmMIOC4oeC4q-C4suC4p-C4tOC4l-C4ouC4suC4peC4seC4ouC4qOC4tOC4peC4m-C4suC4geC4ow!5e0!3m2!1sth!2sth!4v1491660015801" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
@endsection