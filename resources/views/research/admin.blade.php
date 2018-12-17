@extends('admin.index')

@section('show')
    <div class="col-md-12 row-card" style="padding: 1%;">
        <div class="col-md-8" style="padding: 0 1% 0 0">
            <a class="btn btn-primary btn-block btn-lg" href="{{ url('admin/research/create') }}">Create</a>
        </div>


        <div class="col-md-4" style="padding: 0; text-align: left">
                <div class="dropdown">
                    <button class="btn btn-default btn-block btn-lg dropdown-toggle" type="button" data-toggle="dropdown">
                        @if(Request::is('*/recent'))
                            Recent
                        @elseif(Request::is('*/old'))
                            Old 
                        @else
                            Recent
                        @endif
                        <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ url('admin/research/filter/recent') }}" class="btn btn-default btn-lg">
                                Recent
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('admin/research/filter/old') }}" class="btn btn-default btn-lg">
                                Old
                            </a>
                        </li>
                    </ul>
                </div>
            </div>


    </div>

    @if(session('status'))
        <div class="col-md-12 row-card" style="padding: 1%">
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        </div>
    @endif

    <div class="row col-md-12" style="background: #ffffff;padding: 0">
        @foreach($researches as $research)
            @include('research._card', $research)
        @endforeach
    </div>

    <div class="col-md-12" style="text-align: center">
        <?php echo $researches->render(); ?>
    </div>
@endsection