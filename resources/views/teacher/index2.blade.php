@extends('main2')

@section('title', "บุคลากร")

@section('content')
<div class="container">
    <h1 class="title">คณาจารย์</h1>
    <ul class="wrapper-card-person">
        @foreach($teachers as $teacher)
         <li>
             @include('teacher._card2', $teacher)
         </li>
        @endforeach
    </ul>
    <h1 class="title">บุคลากร</h1>
    <ul class="wrapper-card-person">
        @foreach($staffs as $staff)
            <li>
                @include('staff._card2', $staff)
            </li>
        @endforeach
    </ul>
</div>
@endsection