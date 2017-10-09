@extends('main2')

@section('content')
    <div class="container">
        <div class="form-contact">
            <div class="title-form-contact">
                {{ $curricula->name_th }}
            </div>
            <div class="detail-form-contact">
                <h1 class="title">ชื่อปริญญา</h1>
                <ul class="wrapper-detail-all">
                    <li>
                        <p class="title-detail-all">ภาษาไทย</p>
                        <ul class="list-detail-all">
                            <li class="in-detail">{{ $curricula->name_th }}</li>
                        </ul>
                    </li>
                    <li>
                        <p class="title-detail-all">ภาษาอังกฤษ</p>
                        <ul class="list-detail-all">
                            <li class="in-detail">{{ $curricula->name_en }}</li>
                        </ul>
                    </li>
                </ul>
                <h1 class="title">ชื่อหลักสูตร</h1>
                <ul class="wrapper-detail-all">
                    <li>
                        <p class="title-detail-all">ภาษาไทย</p>
                        <ul class="list-detail-all">
                            <li class="in-detail">{{ $curricula->degree_name_th }}</li>
                        </ul>
                    </li>
                    <li>
                        <p class="title-detail-all">ภาษาอังกฤษ</p>
                        <ul class="list-detail-all">
                            <li class="in-detail">{{ $curricula->degree_name_en }}</li>
                        </ul>
                    </li>
                </ul>

                <h1 class="title">เกณฑ์การเข้าศึกษา & เกณฑ์การสำเร็จการศึกษา</h1>
                <ul class="wrapper-detail-all">
                    <li>
                        <p class="title-detail-all">เกณฑ์การเข้าศึกษา</p>
                        <ul class="list-detail-all">
                            <li class="in-detail">{!! $curricula->enrollment_criteria !!}</li>
                        </ul>
                    </li>
                    <li>
                        <p class="title-detail-all">เกณฑ์การสำเร็จการศึกษา</p>
                        <ul class="list-detail-all">
                            <li class="in-detail">{!! $curricula->graduation_criteria !!}</li>
                        </ul>
                    </li>

                </ul>
                <h1 class="title">ค่าใช้จ่าย & หน่วยกิตทั้งหมดที่ต้องเรียน</h1>
                <ul class="wrapper-detail-all">
                    <li>
                        <p class="title-detail-all">ค่าใช้จ่าย</p>
                        <ul class="list-detail-all">
                            <li class="in-detail">ประมาณ {!! $curricula->cost !!} บาทต่อเทอม</li>
                        </ul>
                    </li>
                    <li>
                        <p class="title-detail-all">หน่วยกิต</p>
                        <ul class="list-detail-all">
                            <li class="in-detail">ขั้นต่ำ {!! $curricula->credit !!} หน่วยกิต</li>
                        </ul>
                    </li>
                </ul>

                <h1 class="title">รายละเอียดเพิ่มเติม</h1>
                <ul class="wrapper-detail-all">
                    <li>
                        <p class="title-detail-all">PDF</p>
                        <ul class="list-detail-all">
                            <li class="in-detail"><a href="{{ url('file/show/'.$curricula->file) }}"><button class="background-green color-white btn-download-detail">ดาวน์โหลด</button></a></li>
                        </ul>
                    </li>
                </ul>

            </div>


        </div>
    </div>
@endsection