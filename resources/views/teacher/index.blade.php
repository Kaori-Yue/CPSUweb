@extends('main')

@section('content')
    <div class="container">
        <div class="row row-card">
            <div class="well well-lg">
                <h1>บุคลากรภาควิชาคอมพิวเตอร์</h1>
            </div>
        </div>

        <div class="row row-card">
            <h3>คณาจารย์</h3>
        </div>
        @foreach($teachers as $teacher)
            @include('teacher._card', $teacher)
        @endforeach

       {{-- <div class="row row-card">
            <h3>เจ้าหน้าที่</h3>
        </div>--}}
    </div>

@stop