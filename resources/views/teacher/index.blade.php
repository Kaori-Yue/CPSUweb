@extends('main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h1>Teachers</h1>
                </div>
            </div>
        </div>
        @foreach($teachers as $teacher)
            <div class="row teacher-card">
                <div class="col-md-4 col-xs-12">
                    <img src="{{ url('image/show/'.$teacher->image) }}" height="300px" alt="teacher_image">
                </div>

                <div class="col-md-8 col-xs-12">
                    {!! $teacher->name_th !!}
                </div>
            </div>
        @endforeach
    </div>

@stop