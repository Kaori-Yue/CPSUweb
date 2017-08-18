@extends('admin.index')

@section('show')
    <div class="col-md-12 row-card" style="padding: 1%">
        <div class="col-md-12" style="padding: 0">
            <a class="btn btn-primary btn-block btn-lg" href="{{ url('admin/document/create') }}">Create</a>
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
        @foreach($documents as $document)
            @include('document._card')
        @endforeach
    </div>

    <div class="row col-md-12" style="text-align: center">
        <?php echo $documents->render(); ?>
    </div>
@endsection