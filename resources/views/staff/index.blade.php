@extends('main2')

@section('title', "บุคลากรสายสนับสนุนวิชาการ")

@section('content')
    <div class="container">
        <h1 class="title">บุคลากรสายสนับสนุนวิชาการ</h1>
        <ul class="wrapper-card-person">
            @foreach($staffs as $staff)
                <li>
                    @include('staff._card2', $staff)
                </li>
            @endforeach
        </ul>
    </div>
@endsection