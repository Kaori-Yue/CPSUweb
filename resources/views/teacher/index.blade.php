@extends('main')

@section('content')
    <div class="container">
        <div class="row row-card">
            <div class="well well-lg">
                <h1>บุคลากรภาควิชาคอมพิวเตอร์</h1>
            </div>
        </div>
        @foreach($teachers as $teacher)
            @include('teacher._card', $teacher)
        @endforeach
    </div>

@stop