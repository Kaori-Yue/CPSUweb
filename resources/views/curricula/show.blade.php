@extends('main')

@section('head')
    <link href="https://fonts.googleapis.com/css?family=Trirong" rel="stylesheet">
@stop

@section('content')
    <div class="container" style="font-family: 'Trirong', serif;font-size: 20px">
        <div class="row row-card" style="text-align: center">
            <h1>{{ $curricula->name_th }}</h1>
            <hr>
            <h4>{{ $curricula->name_en }}</h4>
        </div>

        <div class="row row-card" style="padding: 2% 4% 2% 4%">
            <h3 class="bg-success" style="padding: 1%">ชื่อปริญญา</h3>
            <table class="table">
                <tbody>
                <tr>
                    <td>
                        <b>ภาษาไทย</b>
                    </td>
                    <td>
                        <p>{{ $curricula->name_th }}</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>ภาษาอังกฤษ</b>
                    </td>
                    <td>
                        <p>{{ $curricula->name_en }}</p>
                    </td>
                </tr>
                </tbody>
            </table>
            <br>
            <h3 class="bg-success" style="padding: 1%">ชื่อหลักสูตร</h3>
            <table class="table">
                <tbody>
                <tr>
                    <td>
                        <b>ภาษาไทย</b>
                    </td>
                    <td>
                        <p>{{ $curricula->degree_name_th }}</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>ภาษาอังกฤษ</b>
                    </td>
                    <td>
                        <p>{{ $curricula->degree_name_en }}</p>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="row row-card" style="padding: 2% 4% 2% 4%">
            <h3 class="bg-success" style="padding: 1%">เกณฑ์การเข้าศึกษา</h3>
            <p style="padding: 0 1% 0 1%">
                {!! $curricula->enrollment_criteria !!}
            </p>
        </div>

        <div class="row row-card" style="padding: 2% 4% 2% 4%">
            <h3 class="bg-success" style="padding: 1%">เกณฑ์การสำเร็จการศึกษา</h3>
            <p style="padding: 0 1% 0 1%">
                {!! $curricula->graduation_criteria !!}
            </p>
        </div>
        @if($curricula->degree != 'Bachelor Degree')
        <div class="row row-card" style="padding: 2% 4% 2% 4%">
            <h3 class="bg-success" style="padding: 1%">วิชาที่สอบ</h3>
            <p style="padding: 0 1% 0 1%">
                {!! $curricula->entrance_subject !!}
            </p>
        </div>

        <div class="row row-card" style="padding: 2% 4% 2% 4%">
            <h3 class="bg-success" style="padding: 1%">เอกสาร</h3>
            <p style="padding: 0 1% 0 1%">
                {!! $curricula->document !!}
            </p>
        </div>
        @endif

        <div class="row row-card" style="padding: 2% 4% 2% 4%">
            <div class="col-md-6">
                <h3 class="bg-success" style="padding: 1%">ค่าใช้จ่าย</h3>
                <p style="padding: 1%">ประมาณ {!! $curricula->cost !!} ต่อเทอม</p>
            </div>
            <div class="col-md-6">
                <h3 class="bg-success" style="padding: 1%">หน่วยกิต</h3>
                <p style="padding: 1%">ขั้นต่ำ {!! $curricula->credit !!} หน่วยกิต</p>
            </div>
        </div>

        <div class="row row-card" style="padding: 2% 4% 2% 4%">
            <h3 class="bg-success" style="padding: 1%">รายละเอียดเพิ่มเติม</h3>
            <div class="col-md-12" style="text-align: center">
                <p>
                    <a class="btn btn-warning btn-lg" target="_blank" href="{{ url('file/show/'.$curricula->file) }}">ดาวน์โหลด</a>
                </p>
            </div>
        </div>
    </div>
@stop