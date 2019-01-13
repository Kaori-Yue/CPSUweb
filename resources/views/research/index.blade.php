@extends('main') 
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 col-xs-12 content-card">
            <div class="row col-md-12" style="background: #ffffff;text-align: center">
                <div class="well well-lg">
                    <h1 style="padding: 2%">ผลงานวิจัย</h1>
                </div>
            </div>

            <div class="col-md-12 row-card" style="padding: 1%;">
                <div class="col-md-12" style="padding: 0 1% 0 0">
                    <a class="btn btn-primary btn-block btn-lg" href="{{ url('/research/teacher/create') }}">Create</a>
                </div>
                
            </div>
        

            <div class="col-md-12" style="text-align: left; background: #ffffff; padding: 1%">
                <div class="dropdown">
                    <button class="btn btn-default btn-block btn-lg dropdown-toggle" type="button" data-toggle="dropdown">
                        @if(Request::is('*/recent'))
                            All
                        @elseif(Request::is('*/old'))
                            Old 
                        @else
                            All
                        @endif
                        <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        @foreach(App\Teacher::all() as $key => $teacher)
                        <li>
                            <a href="{{ url('research/filter/' . $teacher->id ) }}" class="btn btn-default btn-lg">
                                {{ $teacher->name_th }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>


            

            <div class="row col-md-12" style="background: #ffffff">
                @foreach($researches as $research)
                    @include('research._card', $research)
                @endforeach
            </div>

            <div class="col-md-12" style="text-align: center">
                <?php echo $researches->render(); ?>
            </div>
        </div>
    </div>
</div>
@endsection






