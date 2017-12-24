@extends('admin.index')

@section('show')
    <div class="row-card col-md-12" style="padding: 1%">
        <div class="col-md-8" style="padding: 0">
            <a class="btn btn-primary btn-block" href="{{ url('admin/news/create') }}">Create</a>
        </div>

        <div class="col-md-4" style="padding: 0; text-align: left">
            <a href="{{ url('admin/news/filter/publish') }}" class="btn btn-default">Publish</a>

            <a href="{{ url('admin/news/filter/draft') }}" class="btn btn-default">Draft</a>

            <a href="{{ url('admin/news/filter/disable') }}" class="btn btn-default">Disable</a>
        </div>
    </div>

    @if(session('status'))
        <div class="col-md-12 row-card" style="padding: 1%">
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        </div>
    @endif

    <div class="row col-md-12" style="padding: 0">
        @foreach($blogs as $blog)
            @include('blog._bcard', $blog)
        @endforeach
    </div>

    <div class="row col-md-12" style="text-align: center">
        <?php echo $blogs->render(); ?>
    </div>
@endsection

@section('script')
    <script async src="{{ URL::asset('js/fb.js') }}"></script>
@endsection