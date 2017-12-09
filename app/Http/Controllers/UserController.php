<?php

namespace App\Http\Controllers;

use App\Teacher;
use App\User;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public $role = [
        'user' => 'Users',
        'teacher' => 'Teacher',
        'suspend' => 'Suspend',
        'banned' => 'Banned',
    ];

    public function dashboard()
    {
        $user = Auth::user();
        if($user->role == 'admin'){
            return redirect()->action('AdminController@dashboard');
        }elseif($user->role == 'teacher'){
            return redirect()->action('TeacherController@dashboard');
        }elseif ($user->role == 'suspend'){
            return view('suspend');
        }elseif ($user->role == 'banned'){
            return view('401');
        }

        $tag = Tag::where('name', 'competition')->first();
        $blogs = $tag->blogs;

        return view('user.dashboard', ['blogs' => $blogs]);
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
        $role = $this->role;
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
        $role = $this->role;

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

    public function profile()
    {
        $id = Auth::id();
        $user = User::findOrFail($id);
        if($user->role == 'admin'){
            return view('user.profile', ['user' => $user]);
        }
        elseif($user->role == 'teacher'){
            $teacher = Teacher::where('user_id', $user->id)->first();
            return view('user.profile', [
                'user' => $user,
                'teacher' => $teacher
            ]);
        }
        elseif($user->role == 'user'){
            return view('user.profile', ['user' => $user]);
        }
        else{
            return view('user.profile', ['user' => $user]);
        }
    }

    public function editProfile()
    {
        $user = User::findOrFail(Auth::id());
        if($user->role == 'admin'){
            return view('user.editProfile', ['user' => $user]);
        }
        elseif($user->role == 'teacher'){
            $teacher = Teacher::where('user_id', $user->id)->first();
            return view('user.editProfile', [
                'user' => $user,
                'teacher' => $teacher
            ]);
        }
        elseif($user->role == 'user'){
            return view('user.editProfile', ['user' => $user]);
        }
        else{
            return view('user.editProfile', ['user' => $user]);
        }
    }

    public function updateProfile(Request $request)
    {
        $current_password = $request->get('current_password');
        if(!(Hash::check($current_password, Auth::user()->password))){
            return redirect()->back()->withErrors(['current_password' => 'Current password is wrong']);
        }

        $this->validate($request, [
            'name' => 'required|max:191',
            'email' => 'email',
            'new_password' => 'max:191',
            'new_password_confirm' => 'same:new_password'
        ]);

        $user = User::findOrFail(Auth::id());
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        if($request->has('new_password')){
            $user->password = $request->get('new_password');
        }
        $user->save();

        return redirect()->action('UserController@profile');
    }

    public function index(){
        return view('person.index');
    }
}
