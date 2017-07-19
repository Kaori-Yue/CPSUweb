@extends('admin.index')

@section('head')
    <script src="{{ URL::asset('js/clipboard/dist/clipboard.min.js') }}"></script>
@endsection

@section('show')
    <div class="col-md-12 row-card" style="padding: 1%">
        <div class="col-md-8" style="padding: 0">
            <a class="btn btn-primary btn-block btn-lg" href="{{ url('admin/image/create') }}">Upload</a>
        </div>

        <div class="col-md-4" style="padding: 0; text-align: left">
            <div class="dropdown">
                <button class="btn btn-default btn-block btn-lg dropdown-toggle" type="button" data-toggle="dropdown">
                    @if(Request::is('*/jpeg'))
                        JPEG
                    @elseif(Request::is('*/png'))
                        PNG
                    @elseif(Request::is('*/gif'))
                        GIF
                    @else
                        All Images
                    @endif
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ url('admin/image') }}" class="btn btn-default btn-lg">
                            All
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('admin/image/filter/jpeg') }}" class="btn btn-default btn-lg">
                            JPEG
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('admin/image/filter/png') }}" class="btn btn-default btn-lg">
                            PNG
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('admin/image/filter/gif') }}" class="btn btn-default btn-lg">
                            GIF
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

    <div class="row col-md-12" style="padding: 0;background: #ffffff">
        @foreach($images as $image)
        @include('image._card')
        @endforeach
    </div>

    <div class="row col-md-12" style="text-align: center">
        <?php echo $images->render(); ?>
    </div>
@endsection