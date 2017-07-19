@extends('main')

@section('content')
    <div class="container">
        <div class="row col-md-12" style="background: #ffffff; text-align: center">
            <div class="well well-lg">
                <h1 style="padding: 2%">หลักสูตรปัจจุบัน</h1>
            </div>
        </div>

        <div id="bachelor-degree" class="col-xs-12 some-space hidden-md"></div>

        <div class="row col-md-12" style="background: #ffffff">
            <div style="text-align: left">
                <h2 class="primary-section-heading">ระดับปริญญาตรี</h2>
            </div>
            @foreach($b_curriculas as $curricula)
                @include('curricula._card', $curricula)
            @endforeach
        </div>

        <div id="master-degree" class="col-xs-12 some-space hidden-md"></div>

        <div class="row col-md-12" style="background: #ffffff">
            <div style="text-align: left">
                <h2 class="primary-section-heading">ระดับปริญญาโท</h2>
            </div>
            @foreach($m_curriculas as $curricula)
                @include('curricula._card', $curricula)
            @endforeach
        </div>

        <div id="doctor-degree" class="col-xs-12 some-space hidden-md"></div>

        <div class="row col-md-12" style="background: #ffffff">
            <div style="text-align: left">
                <h2 class="primary-section-heading">ระดับปริญญาเอก</h2>
            </div>
            @foreach($d_curriculas as $curricula)
                @include('curricula._card', $curricula)
            @endforeach
        </div>

        <div class="col-xs-12 some-space hidden-md"></div>

        <div class="row col-md-12" style="background: #ffffff; text-align: center">
            <div class="well well-lg">
                <h1 style="padding: 2%">หลักสูตรเก่า</h1>
            </div>
        </div>.

        <div id="old-curricula" class="col-xs-12 some-space hidden-md"></div>

        <div class="row col-md-12" style="background: #ffffff">
            @if(sizeof($dis_curriculas) > 0)
                @foreach($dis_curriculas as $curricula)
                    @include('curricula._card', $curricula)
                @endforeach
            @else
                <div class="col-md-12" style="text-align: center">
                    <h4>ไม่มีหลักสูตรเก่า</h4>
                </div>

            @endif
        </div>

    </div>
@endsection