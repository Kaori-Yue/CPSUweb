<div class="row row-card col-md-12">
    <div class="col-md-3 col-xs-12 teacher-image"
         style="background-image: url('{{ url('image/show/'.$teacher->image) }}')"></div>
    <div class="col-md-9 col-xs-12" style="background: #40826D;color: #ffffff;padding: 1%;margin-bottom: 1%">
        <h2>{!! $teacher->name_th !!}</h2>
    </div>
    <div class="col-md-9 col-xs-12">

        <h4>{{ $teacher->name_en }}</h4>
        <p><b>ประวัติการศึกษา</b></p>
        <ul>
            @if($teacher->doctor_degree != '')
                <li>{{ $teacher->doctor_degree }}</li>
            @endif
            <li>{{ $teacher->master_degree }}</li>
            <li>{{ $teacher->bachelor_degree }}</li>
        </ul>
        <p><b>อีเมล : </b>{{ $teacher->email }}</p>
        <p><b>สาขาที่เชี่ยวชาญ : </b>{{ $teacher->expertise }}</p>
        @if($teacher->position != '')
        <h4><b>{{ $teacher->position }}</b></h4>
        @endif

        @if (Request::is('admin/*'))
            <a class="btn btn-warning" href="">
                Edit
                <span class="glyphicon glyphicon-wrench"></span>
            </a>

            <a class="btn btn-danger" href="">
                Delete
                <span class="glyphicon glyphicon-remove-sign"></span>
            </a>
        @endif
    </div>
</div>