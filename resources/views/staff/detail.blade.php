@extends('main2')

@section('title', "บุคลากรสายสนับสนุนวิชาการ")
@section('content')
    <div class="container-content">
        <div class="wrapper-header-title">
            <h1 class="header-title">บุคลากรสายสนับสนุนวิชาการ</h1>
            <div class="wrapper-buttom-next-previous">
                <button class="button-previous" id="btn-prve-staff">
                    <img src="{{ URL::asset('image/chevron-left.svg') }}">
                </button>
                <button class="button-next" id="btn-next-staff">
                    <img src="{{ URL::asset('image/chevron-right.svg') }}">
                </button>
            </div>
            <div class="line-header-title"></div>
        </div>

        <ul class="wrapper-card-person-read-person owl-carousel-staff owl-carousel" id="staff">
            @foreach($staffs as $staff)
                <li class="list-wrapper-card-person-read-person">
                    @include('staff._card2', $staff)
                </li>
            @endforeach

        </ul>

        <div class="card-read-person">
            <div class="header-card-read-person">
                <img class="image-header-card-person" src="{{url('image/crop/'.$staff_read->image)}}"/>
                <p class="role-card-read-person">
                    @if($staff_read->position != '')
                        <span class="position-card-person">{{$staff_read->position}}</span>
                    @else
                        <span class="position-card-person">พนักงาน</span>
                    @endif
                </p>
                <h3 class="name-th-card-read-person">{{$staff_read->name_th}}</h3>
                <h3 class="name-eng-card-read-person">{{$staff_read->name_en}}</h3>
            </div>

            <ul class="wrapper-detail-all">

                <li class="list-detail-all">
                    <p class="header-small-detail">อีเมล</p>
                    <ul class="wrapper-small-detail">
                        @php
                            $raw_email = $staff_read->email;
                            $emails = explode("," , $raw_email);
                            for($i = 0 ; $i < count($emails) ; $i++){
                            echo '<li class="list-small-detail">'.$emails[$i].'</li>';
                            }
                        @endphp
                    </ul>
                </li>

                <li class="list-detail-all">
                    <p class="header-small-detail">เว็บไซต์</p>
                    <ul class="wrapper-small-detail">
                        @php
                            $raw_website = $staff_read->website;
                            $websites = explode("," , $raw_website);
                            for($i = 0 ; $i < count($websites) ; $i++){
                            echo '<li class="list-small-detail">'.$websites[$i].'</li>';
                            }
                        @endphp


                    </ul>
                </li>
            </ul>
        </div>
    </div>
@endsection