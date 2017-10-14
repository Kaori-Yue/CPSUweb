<div class="card-document">
    <h1 class="title">{{ $loop->iteration }}) {{ $document->name }}
        <div class="management-logo">
            <a href="{{ url('file/show/'.$document->file_record->id) }}"><img src="{{URL::asset("image/download.png")}}" /></a>
            <p class="description-management-logo">Download</p>
        </div>
    </h1>
    <p class="description-card-document">{{ $document->description }}</p>
</div>