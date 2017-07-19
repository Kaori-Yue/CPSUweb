<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        if($user->role == 'admin'){
            return redirect()->action('AdminController@dashboard');
        }

        return view('user.dashboard');
    }

    public function filter($filter)
    {
        $users = User::where('role', $filter)
        ->orderBy('id', 'DESC')
        ->paginate(20);

        return view('user.admin',['users' => $users]);
    }

    public function create()
    {
        $role = [
            'user' => 'Users',
            'suspend' => 'Suspend',
            'banned' => 'Banned',
        ];
        return view('user.create', ['role' => $role]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:191',
            'email' => 'email',
            'password' => 'required|max:191',
            'role' => 'required|max:191',
        ]);

        $password = bcrypt($request->get('password'));
        $user = [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => $password,
            'role' => $request->get('role'),
        ];

        User::create($user);
        return redirect()->action('AdminController@user');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $role = [
            'user' => 'Users',
            'suspend' => 'Suspend',
            'banned' => 'Banned',
        ];

        return view('user.edit', ['user' => $user, 'role' => $role]);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $user->name = $request->get('name');
        $user->email = $request->get('email');
        if($request->has('password')){
            $user->password = $request->get('password');
        }
        $user->role = $request->get('role');
        $user->save();

        return redirect()->action('AdminController@user');
    }
}
