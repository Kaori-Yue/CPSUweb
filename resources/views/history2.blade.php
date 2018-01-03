@extends('main2')

@section('title', "ประวัติภาควิชา")

@section('content')
    <div class="container-content">
        <ul class="wrapper-nav">
            <li class="list-nav">
                <a href="{{url("")}}">
                    <img src="{{ URL::asset('image/home-nav.svg') }}" class="image-home-list-nav">
                </a>
            </li>
            <li class="list-nav">
                <img src="{{ URL::asset('image/chevron-right-green.svg') }}" class="image-chevron-right-list-nav">
            </li>
            <li class="list-nav"><a href="{{url("department")}}">เกี่ยวกับภาควิชา</a></li>

            <li class="list-nav">
                <img src="{{ URL::asset('image/chevron-right-green.svg') }}" class="image-chevron-right-list-nav">
            </li>
            <li class="list-nav">ประวัติภาควิชา</li>
        </ul>
        <div class="wrapper-header-title">
            <h1 class="header-title">ภาควิชาคอมพิวเตอร์ คณะวิทยาศาสตร์ มหาวิทยาลัยศิลปากร</h1>
            <div class="line-header-title"></div>
        </div>
        <img src="{{URL::asset('image/header_cp.jpg')}}" class="image-history">
        <p class="description-history">ภาควิชาคอมพิวเตอร์ แต่เดิมมีฐานะเป็นสาขาวิชาวิทยาการคอมพิวเตอร์ซึ่งสังกัดอยู่ในภาควิชาคณิตศาสตร์ คณะวิทยาศาสตร์ มหาวิทยาลัยศิลปากร เนื่องจากเพื่อก่อให้เกิดเอกภาพและความคล่องตัวในการบริหารและดำเนินการต่างๆ ให้มีประสิทธิภาพมากยิ่งขึ้น จึงได้รับการอนุมัติให้จัดตั้งเป็นภาควิชาคอมพิวเตอร์ สังกัดคณะวิทยาศาสตร์ จากสภามหาวิทยาลัยศิลปากรตั้งแต่วันที่ 8 กันยายน 2547 ภาควิชาคอมพิวเตอร์ ดำเนินการจัดการเรียนการสอนในศาสตร์ทาง คอมพิวเตอร์และเทคโนโลยีสารสนเทศทั้งด้านฮาร์ดแวร์และซอฟต์แวร์ โดยมุ่งหวังที่จะผลิตบัณฑิตที่มีความรู้ความสามารถเพื่อประกอบอาชีพที่เกี่ยวข้อง กับคอมพิวเตอร์ในแขนงต่างๆ และสนองต่อความต้องการของประเทศชาติ ภาควิชาฯ ได้เริ่มเปิดสอนหลักสูตรวิทยาศาสตรบัณฑิต สาขาวิทยาการคอมพิวเตอร์ ในปีการศึกษา 2531 หลักสูตรวิทยาศาสตรมหาบัณฑิต สาขาวิทยาการคอมพิวเตอร์ ในปีการศึกษา 2545 หลักสูตรวิทยาศาสตรมหาบัณฑิต สาขาเทคโนโลยีสารสนเทศ ในปีการศึกษา 2547 และหลักสูตรวิทยาศาสตรบัณฑิต สาขาเทคโนโลยีสารสนเทศ ในปีการศึกษา 2548</p>
    </div>
@endsection