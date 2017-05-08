<div class="col-md-12" style="padding: 1%;background: #FFFFFF">
    <a href="{{ url('curricula/'.$curricula->slug) }}" style="text-decoration: none">
        <div class="well-lg" style="border: solid;border-radius: 0">
            <h3><b>{{ $curricula->name_th }}</b></h3>
            <h4>{{ $curricula->name_en }}</h4>
            <hr>
            {{--<p>{{ substr($research->description, 0, 120) }}</p>--}}
            <p>{{ $curricula->degree_name_th }}</p>
        </div>
    </a>
    @if(Request::is('admin/*'))
        <div class="col-md-12" style="padding: 1%">
            <div class="col-md-6">
                <a href="{{ url('curricula/'.$curricula->slug.'/edit') }}" class="btn btn-warning btn-block btn-lg">Edit</a>
            </div>
            <div class="col-md-6">
                <a href="" class="btn btn-danger btn-block btn-lg">Delete</a>
            </div>
        </div>
    @endif
</div>