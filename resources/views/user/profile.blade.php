@extends('main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="profile-card">
                @if($user->role == 'admin')
                    <img src="{{ URL::asset('image/archangel.jpg') }}" alt="{{ $user->name }}" style="width:100%">
                @elseif($user->role == 'teacher')
                    <img src="{{ url('image/show/'.$teacher->image) }}" alt="{{ $user->name }}" style="width:100%">
                @else
                    <img src="{{ URL::asset('image/groot.gif') }}" alt="{{ $user->name }}" style="width:100%">
                @endif
                <div class="profile-content">
                    <h2>{{ $user->name }}</h2>
                    <p class="title">{{ $user->email }}</p>
                    <p>{{ $user->role }}</p>
                    <a href="{{ url('profile/edit') }}" class="btn btn-warning">Edit Profile</a>
                </div>
            </div>
        </div>
    </div>
@endsection