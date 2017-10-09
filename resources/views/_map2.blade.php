 <div class="form-contact">
        <div class="title-form-contact">
            แผนผังเว็บไซต์
        </div>
        <div class="detail-form-contact">
            <a href="{{ url('curricula') }}"><h1 class="title">หลักสูตร</h1></a>
            <ul class="wrapper-detail-all">
                <li>
                    <ul class="list-detail-all">
                        <li class="in-detail"><a href="{{ url('curricula#bachelor-degree') }}" class="link-in-detail">หลักสูตรปริญญาตรี</a></li>
                        <li class="in-detail"><a href="{{ url('curricula#master-degree') }}" class="link-in-detail">หลักสูตรปริญญาโท</a></li>
                        <li class="in-detail"><a href="{{ url('curricula#doctor-degree') }}" class="link-in-detail">หลักสูตรปริญญาเอก</a></li>
                    </ul>

                </li>
            </ul>
            <a href="{{ url('blog') }}"><h1 class="title">ข่าวสาร</h1></a>
            <ul class="wrapper-detail-all">
                <li>
                    <p class="title-detail-all">ข่าวล่าสุด</p>
                    <ul class="list-detail-all">
                        <li class="in-detail"><a href="{{ url('blog#latest-news') }}" class="link-in-detail">ดูข่าวล่าสุด</a></li>
                    </ul>
                </li>
                <li>
                    <p class="title-detail-all">ข่าวตามหมวดหมู่</p>
                    <ul class="list-detail-all">
                        <li class="in-detail"><a class="link-in-detail">ดูข่าวแสดงความยินดี</a></li>
                        <li class="in-detail"><a class="link-in-detail">ดูข่าวการแข่งขัน</a></li>
                    </ul>
                </li>
            </ul>

            <a href="{{ url('teacher') }}"><h1 class="title">บุคลากร</h1></a>
            <ul class="wrapper-detail-all">
                <li>
                    <p class="title-detail-all">คณาจารย์</p>
                    <ul class="list-detail-all">
                        <li class="in-detail"><a href="{{ url('teacher#teacher') }}" class="link-in-detail">ดูคณาจารย์ทั้งหมด</a></li>
                    </ul>
                </li>
                <li>
                    <p class="title-detail-all">เจ้าหน้าที่</p>
                    <ul class="list-detail-all">
                        <li class="in-detail"><a href="{{ url('teacher#staff') }}" class="link-in-detail">ดูเจ้าหน้าที่ทั้งหมด</a></li>
                    </ul>
                </li>
            </ul>
            <!--<h1 class="title">ผลงานวิจัย</h1>
            <ul class="wrapper-detail-all">
                <li>
                    <ul class="list-detail-all">
                        <li class="in-detail"><a class="link-in-detail">ดูผลงานวิจัยทั้งหมด</a></li>
                    </ul>
                </li>
            </ul>-->
            <h1 class="title">เกี่ยวกับภาควิชา</h1>
            <ul class="wrapper-detail-all">
                <li>
                    <a href="{{ url('history') }}"><p class="title-detail-all">ประวัติภาควิชา</p></a>
                    <ul class="list-detail-all">
                        <li class="in-detail"><a href="{{ url('history') }}" class="link-in-detail">ดูประวัติภาควิชา</a></li>
                    </ul>
                </li>
                <li>
                    <p class="title-detail-all">ที่อยู่ภาควิชา</p>
                    <ul class="list-detail-all">
                        <li class="in-detail"><a href="{{ url('contact#address') }}" class="link-in-detail">ดูที่อยู่ภาควิชา</a></li>
                    </ul>
                </li>
                <li>
                    <p class="title-detail-all">เบอร์โทรศัพท์</p>
                    <ul class="list-detail-all">
                        <li class="in-detail"><a href="{{ url('contact#telephone') }}" class="link-in-detail">ดูเบอร์โทรศัพท์</a></li>
                    </ul>
                </li>
                <li>
                    <p class="title-detail-all">โทรสาร</p>
                    <ul class="list-detail-all">
                        <li class="in-detail"><a href="{{ url('contact#fax') }}" class="link-in-detail">ดูโทรสาร</a></li>
                    </ul>
                </li>
                <li>
                    <p class="title-detail-all">แผนที่</p>
                    <ul class="list-detail-all">
                        <li class="in-detail"><a href="{{ url('contact#map') }}" class="link-in-detail">ดูแผนที่</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>