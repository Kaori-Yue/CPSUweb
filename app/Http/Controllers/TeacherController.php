<?php

namespace App\Http\Controllers;

use App\File;
use App\Helper\TokenGenerator;
use App\Staff;
use App\Teacher;
use App\User;
use Illuminate\Http\Request;
use App\Traits\ImageTrait;

class TeacherController extends Controller
{
    use ImageTrait;
    public function index()
    {
        $teachers = Teacher::duty()
            ->orderBy('rank', 'desc')
            ->orderBy('name_th')
            ->get();

        $staffs = Staff::duty()->orderBy('name_th')->get();

        return view('teacher.index', [
            'teachers' => $teachers,
            'staffs' => $staffs
        ]);
    }

    public function filter($filter)
    {
        $teachers = Teacher::where('status', $filter)
            ->orderBy('rank', 'desc')
            ->orderBy('name_th')
            ->get();

        return view('teacher.admin', [
            'teachers' => $teachers
        ]);
    }

    public function create()
    {
        //$status = Teacher::pluck('status', 'status');
        $status = [
            'duty' => 'Duty',
            'retire' => 'Retire',
            'study' => 'Study',
            'disable' => 'Disable',
        ];
        return view('teacher.create', ['status' => $status]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name_th' => 'required|max:191',
            'name_en' => 'required|max:191',
            'doctor_degree' => 'max:191',
            'master_degree' => 'required|max:191',
            'bachelor_degree' => 'required|max:191',
            'email' => 'max:191',
            'website' => 'max:191',
            'position' => 'max:191',
            'expertise' => 'max:191',
            'status' => 'required|in:duty,retire,disable,study',
            'image' => 'required|image',
        ]);

        $teacher = $request->all();
        $teacher['token'] = (new TokenGenerator())->generate(6);
        $teacher['password'] = password_hash($teacher['name_en'], PASSWORD_DEFAULT);

        $image = $request->file('image');
        $file = $this->storeImage($image, 'profile');
        $teacher['image'] = $file->id;

        $teacher['rank'] = self::handleRank($teacher);

        $teacher = Teacher::create($teacher);

        $user = [
            'name' => $teacher->name_th,
            'email' => $teacher->email,
            'password' => $teacher->password,
            'role' => 'teacher',
            'remember_token' => ''
        ];
        User::create($user);

        return redirect()->action('AdminController@teacher')->with('status', 'Create Complete!');
    }

    public function handleRank($teacher)
    {
        if($teacher['position'] == 'หัวหน้าภาควิชา'){
            return 100;
        }elseif($teacher['position'] == 'รองหัวหน้าภาควิชา'){
            return 50;
        }

        $pieces = explode('.', $teacher['name_th']);
        if($pieces[0] == 'ศ'){
            if($pieces[1] == 'ดร'){
                return 45;
            }else{
                return 40;
            }
        }
        elseif ($pieces[0] == 'รศ'){
            if($pieces[1] == 'ดร'){
                return 35;
            }else{
                return 30;
            }
        }
        elseif ($pieces[0] == 'ผศ'){
            if($pieces[1] == 'ดร'){
                return 25;
            }else{
                return 20;
            }
        }
        elseif ($pieces[0] == 'อ'){
            if($pieces[1] == 'ดร'){
                return 10;
            }else{
                return 5;
            }
        }
        else{
            return 0;
        }
    }

    public function edit($id)
    {
        $teacher = Teacher::findOrFail($id);
        $status = [
            'duty' => 'Duty',
            'retire' => 'Retire',
            'study' => 'Study',
            'disable' => 'Disable',
        ];

        return view('teacher.edit', ['status' => $status, 'teacher' => $teacher]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name_th' => 'required|max:191',
            'name_en' => 'required|max:191',
            'doctor_degree' => 'max:191',
            'master_degree' => 'required|max:191',
            'bachelor_degree' => 'required|max:191',
            'email' => 'max:191',
            'website' => 'max:191',
            'position' => 'max:191',
            'expertise' => 'max:191',
            'status' => 'required|in:duty,retire,disable,study',
            'image' => 'image',
        ]);

        $teacher = Teacher::findOrFail($id);
        $editedTeacher = $request->all();

        $image = $request->file('image');
        $editedTeacher['rank'] = self::handleRank($editedTeacher);

        if(isset($image)){
            $file = $this->storeImage($image, 'profile');
            $editedTeacher['image'] = $file->id;
        }
        $teacher->update($editedTeacher);

        return redirect()->action('AdminController@teacher')->with('status', 'Update Complete!');
    }

    public function destroy($id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();

        $image = File::findOrFail($teacher->image);
        self::deleteImage($image);

        return redirect()->action('AdminController@teacher')->with('status', 'Delete Complete!');
    }

}
