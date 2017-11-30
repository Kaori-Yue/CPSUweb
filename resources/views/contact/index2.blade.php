@extends('main2')

@section('title', "ติดต่อภาควิชา")

@section('content')
<div class="container">
    <div class="form-contact">
        <div class="title-form-contact">
            ภาควิชาคอมพิวเตอร์ คณะวิทยาศาสตร์ มหาวิทยาลัยศิลปากร
        </div>
        <div class="detail-form-contact">
            <h1 class="title">ที่อยู่</h1>
            <ul class="wrapper-detail-all">
                <li>
                    <p class="title-detail-all">ภาษาไทย</p>
                    <ul class="list-detail-all">
                        <li class="in-detail">คณะวิทยาศาสตร์, มหาวิทยาลัยศิลปากร</li>
                        <li class="in-detail">วิทยาเขต พระราชวังสนามจันทร์</li>
                        <li class="in-detail">ถนน ราชมรรคาใน</li>
                        <li class="in-detail">อำเภอ เมืองฯ</li>
                        <li class="in-detail">จังหวัด นครปฐม</li>
                        <li class="in-detail">73000</li>
                    </ul>
                </li>
                <li>
                    <p class="title-detail-all">ภาษาอังกฤษ</p>
                    <ul class="list-detail-all">
                        <li class="in-detail">Faculty of Science, Silpakorn University</li>
                        <li class="in-detail">Sanam Chandra Palace Campus</li>
                        <li class="in-detail">Rajamunka-nai Rd.</li>
                        <li class="in-detail">Muang District</li>
                        <li class="in-detail">Nakhon Pathom</li>
                        <li class="in-detail">73000</li>
                    </ul>
                </li>
            </ul>
            <h1 class="title">โทรศัพท์</h1>
            <ul class="wrapper-detail-all">
                <li>
                    <p class="title-detail-all">เบอร์ตรงภาควิชา</p>
                    <ul class="list-detail-all">
                        <li class="in-detail">0-3424-5334-5</li>
                        <li class="in-detail">0-3427-2923</li>
                    </ul>
                </li>
                <li>
                    <p class="title-detail-all">เบอร์กลางคณะฯ</p>
                    <ul class="list-detail-all">
                        <li class="in-detail">0-3425-5093</li>

                    </ul>
                </li>
                <li>
                    <p class="title-detail-all">เบอร์กลางมหาวิทยาลัยศิลปากร</p>
                    <ul class="list-detail-all">
                        <li class="in-detail">0-3425-3910-19</li>
                        <li class="in-detail">0-3425-3840-4</li>
                    </ul>
                </li>
            </ul>

            <h1 class="title">โทรสาร</h1>
            <ul class="wrapper-detail-all">
                <li>
                    <p class="title-detail-all">เบอร์ภาควิชาฯ</p>
                    <ul class="list-detail-all">
                        <li class="in-detail">0-3427-2923</li>
                    </ul>
                </li>
                <li>
                    <p class="title-detail-all">เบอร์คณะฯ</p>
                    <ul class="list-detail-all">
                        <li class="in-detail">0-3427-2923</li>

                    </ul>
                </li>

            </ul>
            <h1 class="title">แผนที่</h1>
            <div class="google-maps" style="width: 100%; position: relative">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3874.327430244856!2d100.03898761495437!3d13.81936679030376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e2e5cbe1eb3a3d%3A0x10d91d1f54fe92b3!2z4LiE4LiT4Liw4Lin4Li04LiX4Lii4Liy4Lio4Liy4Liq4LiV4Lij4LmMIOC4oeC4q-C4suC4p-C4tOC4l-C4ouC4suC4peC4seC4ouC4qOC4tOC4peC4m-C4suC4geC4ow!5e0!3m2!1sth!2sth!4v1491660015801" height="400" width="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>

    </div>
</div>

@endsection