@extends('main2')

@section('title', "หลักสูตร")

@section('content')
<div class="container">
    <h1 class="title">หลักสูตร ปี 2560</h1>
    <ul class="wrapper-card-course">
        @foreach($all_curriculas as $curricula)
        <li>
            @include('curricula._card2', $curricula)
        </li>
        @endforeach
    </ul>
</div>
@endsection