@extends('main2')

@section('title', "หลักสูตร")

@section('content')
<div class="container-content">
    <div class="wrapper-header-title">
        <h1 class="header-title">หลักสูตรปริญญาตรี</h1>
        <div class="line-header-title"></div>

    </div>
    <ul class="wrapper-card-course">
        @foreach($b_curriculas as $curricula)
        <li>
            @include('curricula._card2', $curricula)
        </li>
        @endforeach
    </ul>
    <div class="wrapper-header-title">
        <h1 class="header-title">หลักสูตรปริญญาโท</h1>
        <div class="line-header-title"></div>

    </div>
    <ul class="wrapper-card-course">
        @foreach($m_curriculas as $curricula)
            <li>
                @include('curricula._card2', $curricula)
            </li>
        @endforeach
    </ul>
    <div class="wrapper-header-title">
        <h1 class="header-title">หลักสูตรปริญญาเอก</h1>
        <div class="line-header-title"></div>

    </div>

    <ul class="wrapper-card-course">
        @foreach($d_curriculas as $curricula)
            <li>
                @include('curricula._card2', $curricula)
            </li>
        @endforeach
    </ul>
</div>
@endsection