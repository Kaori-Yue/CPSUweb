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
            @include('teacher._card', $teacher)
        @endforeach
    </div>

@stop