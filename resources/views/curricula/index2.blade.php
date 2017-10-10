@extends('main2')

@section('title', "หลักสูตร")

@section('content')
<div class="container">
    <h1 class="title">หลักสูตรปริญญาตรี</h1>
    <ul class="wrapper-card-course">
        @foreach($b_curriculas as $curricula)
        <li>
            @include('curricula._card2', $curricula)
        </li>
        @endforeach
    </ul>
    <h1 class="title">หลักสูตรปริญญาโท</h1>
    <ul class="wrapper-card-course">
        @foreach($m_curriculas as $curricula)
            <li>
                @include('curricula._card2', $curricula)
            </li>
        @endforeach
    </ul>
    <h1 class="title">หลักสูตรปริญญาเอก</h1>
    <ul class="wrapper-card-course">
        @foreach($d_curriculas as $curricula)
            <li>
                @include('curricula._card2', $curricula)
            </li>
        @endforeach
    </ul>
</div>
@endsection