@extends('admin.index')

@section('head')
    <script src="{{ URL::asset('js/clipboard/dist/clipboard.min.js') }}"></script>
@endsection

@section('show')
    <div class="col-md-12 row-card" style="padding: 1%">
        <div class="col-md-12" style="padding: 0">
            <a class="btn btn-primary btn-block btn-lg" href="{{ url('admin/file/create') }}">Upload</a>
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
        @foreach($files as $file)
            @include('file._card')
        @endforeach
    </div>

    <div class="row col-md-12" style="text-align: center">
        <?php echo $files->render(); ?>
    </div>
@endsection