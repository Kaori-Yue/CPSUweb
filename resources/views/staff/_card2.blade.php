{{--<div class="card-person">--}}
    {{--<ul class="header-card-person">--}}
        {{--<li class="image-card-news">--}}
            {{--<img src="{{url('image/show/'.$staff->image)}}" >--}}
        {{--</li>--}}
        {{--<li class="detail-header-card-person">--}}
            {{--<h1 class="title">{{$staff->name_th}}--}}
                {{--@if($staff->position != '')--}}
                    {{--<span class="position-card-person">{{$staff->position}}</span>--}}
                {{--@endif--}}
            {{--</h1>--}}
            {{--<p class="name-eng-card-person">{{$staff->name_en}}</p>--}}
        {{--</li>--}}
    {{--</ul>--}}
    {{--<div class="detail-card-person">--}}
        {{--<ul class="wrapper-detail-all">--}}
            {{--<li>--}}
                {{--<p class="title-detail-all">เว็บไซต์</p>--}}
                {{--<ul class="list-detail-all">--}}
                    {{--<li class="in-detail"><a href="http://{{$staff->website}}" target="_blank">{{$staff->website}}</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<p class="title-detail-all">อีเมล</p>--}}
                {{--<ul class="list-detail-all">--}}
                    {{--<li class="in-detail">{{$staff->email}}</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
        {{--</ul>--}}
    {{--</div>--}}
{{--</div>--}}

<a href="{{ url('staff/'. $staff->id) }}">
    <div class="card-person
    @php
        $id = explode("/" , url()->current());
        if($staff->id == $id[count($id)-1]){
            echo "active-card-person-read-person";
        }
    @endphp
            ">

        <img class="image-card-person" src="{{url('image/crop/'.$staff->image)}}" />
        <p class="name-card-person">{{$staff->name_th}}</p>
        <h3 class="role-card-person">
            @if($staff->position != '')
                <span class="position-card-person">{{$staff->position}}</span>
            @else
                <span class="position-card-person">พนักงาน</span>
            @endif
        </h3>

    </div>
</a>

