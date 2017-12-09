@extends('main2')

@section('title', "บุคลากรสายวิชาการ")

@section('content')
<div class="container-content">

    <div class="wrapper-header-title">
        <h1 class="header-title">บุคลากรสายวิชาการ</h1>
        <div class="line-header-title"></div>
    </div>

    <ul class="wrapper-cand-all">
        @foreach($teachers as $teacher)
            <li class="list-wrapper-card-all">
                @include('teacher._card2', $teacher)
            </li>
        @endforeach
    </ul>
</div>
@endsection