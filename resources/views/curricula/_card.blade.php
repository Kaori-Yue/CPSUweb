<a href="{{ url('curricula/'.$curricula->slug) }}">
    <div class="col-md-12" style="padding: 1%; background: #ffffff;">
        <div class="well-lg" style="border: solid;border-radius: 0">
            <h3><b>{{ $curricula->name_th }}</b></h3>
            <h4>{{ $curricula->name_en }}</h4>
            <hr>
            {{--<p>{{ substr($research->description, 0, 120) }}</p>--}}
            <p>{{ $curricula->degree_name_th }}</p>
        </div>
    </div>
</a>
