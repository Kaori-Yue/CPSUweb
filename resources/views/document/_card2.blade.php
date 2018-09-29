{{--<div class="card-document">--}}
    {{--<h1 class="title">{{ $loop->iteration }}) {{ $document->name }}--}}
        {{--<div class="management-logo">--}}
            {{--<a href="{{ url('file/show/'.$document->file_record->id) }}"><img src="{{URL::asset("image/download.png")}}" /></a>--}}
            {{--<p class="description-management-logo">Download</p>--}}
        {{--</div>--}}
    {{--</h1>--}}
    {{--<p class="description-card-document">{{ $document->description }}</p>--}}
{{--</div>--}}
<div class="card-document">
    <p class="name-card-document">{{ $document->name }}</p>
    <p class="decription-card-document">{{ $document->description }}</p>

    <a href="{{ url('file/show/'.$document->file) }}" target="_blank">
        <button class="btn-download-card-document">
            <img src="{{ URL::asset('image/download-icon.svg') }}">
        </button>
    </a>


</div>