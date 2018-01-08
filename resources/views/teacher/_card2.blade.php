{{--<div class="card-person">--}}
    {{--<ul class="header-card-person">--}}
        {{--<li class="image-card-news">--}}
            {{--<img src="{{url('image/show/'.$teacher->image)}}" >--}}
        {{--</li>--}}
        {{--<li class="detail-header-card-person">--}}
            {{--<h1 class="title">{{$teacher->name_th}}--}}
                {{--@if($teacher->position != '')--}}
                    {{--<span class="position-card-person">{{$teacher->position}}</span>--}}
                {{--@endif--}}
            {{--</h1>--}}
            {{--<p class="name-eng-card-person">{{$teacher->name_en}}</p>--}}
        {{--</li>--}}
    {{--</ul>--}}
    {{--<div class="detail-card-person">--}}
        {{--<ul class="wrapper-detail-all">--}}
            {{--<li>--}}
                {{--<p class="title-detail-all">ประวัติการศึกษา</p>--}}
                {{--<ul class="list-detail-all">--}}
                    {{--@if($teacher->doctor_degree != '')--}}
                        {{--<li class="in-detail">{{$teacher->doctor_degree}}</li>--}}
                    {{--@endif--}}
                    {{--<li class="in-detail">{{$teacher->master_degree}}</li><li class="in-detail">{{$teacher->bachelor_degree}}</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<p class="title-detail-all">สาขาที่เชี่ยวชาญ</p>--}}
                {{--<ul class="list-detail-all">--}}
                    {{--<li class="in-detail">{{$teacher->expertise}}</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<p class="title-detail-all">เว็บไซต์</p>--}}
                {{--<ul class="list-detail-all">--}}
                    {{--<li class="in-detail"><a href="http://{{$teacher->website}}" target="_blank">{{$teacher->website}}</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<p class="title-detail-all">อีเมล</p>--}}
                {{--<ul class="list-detail-all">--}}
                    {{--<li class="in-detail">{{$teacher->email}}</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
        {{--</ul>--}}
    {{--</div>--}}
{{--</div>--}}
<a href="{{ url('teacher/'. $teacher->id) }}">
    <div class="card-person
    @php
        $id = explode("/" , url()->current());
        if($teacher->id == $id[count($id)-1]){
            echo "active-card-person-read-person";
        }
    @endphp
">

        <img class="image-card-person" src="{{url('image/crop/'.$teacher->image)}}" />
        <p class="name-card-person">{{$teacher->name_th}}</p>
        <h3 class="role-card-person">
            @if($teacher->position != '')
                <span class="position-card-person">{{$teacher->position}}</span>
            @else
                <span class="position-card-person">อาจารย์ประจำภาควิชา</span>
            @endif
        </h3>

    </div>
</a>
