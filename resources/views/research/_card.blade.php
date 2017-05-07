<a href="{{ url('research/'.$research->slug) }}" style="text-decoration: none">
    <div class="col-md-6" style="padding: 1%">
        <div class="well-lg" style="border: solid;border-radius: 0;height: 250px">
            <h3><b>{{ $research->name }}</b></h3>
            <hr>
            {{--<p>{{ substr($research->description, 0, 120) }}</p>--}}
            <p>{{ $research->created_at }}</p>
        </div>
    </div>
</a>