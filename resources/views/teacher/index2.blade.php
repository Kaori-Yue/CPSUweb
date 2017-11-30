@extends('main2')

@section('title', "บุคลากรสายวิชาการ")

@section('content')
<div class="container-content">
    <h1 class="title">บุคลากรสายวิชาการ</h1>
    <ul class="wrapper-card-person">
        @foreach($teachers as $teacher)
         <li>
             @include('teacher._card2', $teacher)
         </li>
        @endforeach
    </ul>
</div>
@endsection