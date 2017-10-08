<div class="card-document">
    <h1 class="title">มศก.1
        <div class="management-logo">
            <a href="{{ url('file/show/'.$document->file_record->id) }}"><img src="{{URL::asset("image/Icon-Share.png")}}" /></a>
            <p class="description-management-logo">Download</p>
        </div>
    </h1>
    <p class="description-card-document">{{ $loop->iteration }}) {{ $document->name }}</p>
</div>