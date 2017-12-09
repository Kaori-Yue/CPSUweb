@extends('main2')

@section('title', "บุคลากรสายสนับสนุนวิชาการ")

@section('content')
    <div class="container-content">
        <div class="wrapper-header-title">
            <h1 class="header-title">บุคลากรสายสนับสนุนวิชาการ</h1>
            <div class="line-header-title"></div>
        </div>
        <ul class="wrapper-cand-all">
            @foreach($staffs as $staff)
                <li class="list-wrapper-card-all">
                    @include('staff._card2', $staff)
                </li>
            @endforeach
        </ul>

    </div>
@endsection