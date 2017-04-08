@extends('main')

@section('content')
    <div class="container">
        <div class="row row-card">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h1>บุคลากรภาควิชาคอมพิวเตอร์</h1>
                </div>
            </div>
        </div>
        @foreach($teachers as $teacher)
            <div class="row row-card">
                <div class="col-md-3 col-xs-12" style="overflow: hidden;border: #40826D solid">
                    <img src="{{ url('image/show/'.$teacher->image) }}" height="300px" alt="teacher_image">
                </div>

                <div class="col-md-9 col-xs-12">
                    @if($teacher->position != '')
                        <div style="background: #40826D;color: #ffffff;padding: 1%">
                            <h4>{{ $teacher->position }}</h4>
                        </div>
                    @endif
                    <h2><b>{!! $teacher->name_th !!}</b></h2>
                    <h4>{{ $teacher->name_en }}</h4>
                    <p><b>ประวัติการศึกษา</b></p>
                    <ul>
                        @if($teacher->doctor_degree != '')
                        <li>{{ $teacher->doctor_degree }}</li>
                        @endif
                        <li>{{ $teacher->master_degree }}</li>
                        <li>{{ $teacher->bachelor_degree }}</li>
                    </ul>
                    <p><b>อีเมล : </b>{{ $teacher->email }}</p>
                    <p><b>สาขาที่เชี่ยวชาญ : </b>{{ $teacher->expertise }}</p>
                </div>
            </div>
        @endforeach
    </div>

@stop