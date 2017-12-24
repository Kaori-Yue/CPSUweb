@extends('admin.index')

@section('show')
    <div class="row-card col-md-12" style="padding: 1%">
        <div class="col-md-8" style="padding: 0">
            <a class="btn btn-primary btn-block btn-lg" href="{{ url('admin/news/create') }}">Create</a>
        </div>

        <div class="col-md-4" style="padding: 0; text-align: left">
            <div class="dropdown">
                <button class="btn btn-default btn-block btn-lg dropdown-toggle" type="button" data-toggle="dropdown">
                    @if(Request::is('*/publish'))
                    Publish
                    @elseif(Request::is('*/draft'))
                    Draft
                    @elseif(Request::is('*/disable'))
                    Disable
                    @elseif(Request::is('*/featured'))
                    Featured
                    @elseif(Request::is('*/normal'))
                    Normal
                    @else
                    All Blog
                    @endif
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ url('admin/news') }}" class="btn btn-default btn-lg">
                            All
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('admin/news/filter/publish') }}" class="btn btn-default btn-lg">
                            Publish
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('admin/news/filter/draft') }}" class="btn btn-default btn-lg">
                            Draft
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('admin/news/filter/disable') }}" class="btn btn-default btn-lg">
                            Disable
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('admin/news/filter/featured') }}" class="btn btn-default btn-lg">
                            Feature
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('admin/news/filter/normal') }}" class="btn btn-default btn-lg">
                            Normal
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