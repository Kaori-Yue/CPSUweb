@extends('admin.index')

@section('show')
    <div class="row-card col-md-12" style="padding: 1%">
        <div class="col-md-8" style="padding: 0">
            <a class="btn btn-primary btn-block btn-lg" href="{{ url('admin/user/create') }}">Create</a>
        </div>

        <div class="col-md-4" style="padding: 0; text-align: left">
            <div class="dropdown">
                <button class="btn btn-default btn-block btn-lg dropdown-toggle" type="button" data-toggle="dropdown">
                    @if(Request::is('*/suspend'))
                        Suspend
                    @elseif(Request::is('*/banned'))
                        Banned
                    @else
                        All Users
                    @endif
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ url('admin/user') }}" class="btn btn-default btn-lg">
                            All
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('admin/user/filter/user') }}" class="btn btn-default btn-lg">
                            User
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('admin/user/filter/suspend') }}" class="btn btn-default btn-lg">
                            Suspend
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('admin/user/filter/banned') }}" class="btn btn-default btn-lg">
                            Banned
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

    <div class="col-md-12 row-card table-responsive" style="padding: 1%">
        <table class="table table-hover table-bordered ">
            <thead>
            <tr>
                <th>Edit</th>
                <th>Name</th>
                <th>Role</th>
                <th>Email</th>
                <th>Created At</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
            <tr @if($user->role == 'suspend') class="warning" @elseif($user->role == 'banned') class="danger" @endif>
                <td>
                    <a href="{{ url('user/'.$user->id.'/edit') }}" class="btn btn-warning btn-xs">
                        <i class="material-icons">mode_edit</i>
                    </a>
                </td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->role }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at }}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <div class="text-center">
            {{ $users->links() }}
        </div>

    </div>
@endsection