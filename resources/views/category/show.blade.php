@extends('main')

@section('content')
    <div style="background: rgba(130,109,64,0.4)">
        <div class="container">
            <div class="row row-card" style="text-align: center">
                <h3>{{ $category->name }}</h3>
                <hr>
            </div>
        </div>
    </div>
@endsection