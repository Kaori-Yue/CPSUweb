<?php

namespace App\Http\Controllers;

use App\Helper\TokenGenerator;
use App\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        return view('teacher.index', ['teachers' => $teachers]);
    }

    public function create()
    {
        //$status = Teacher::pluck('status', 'status');
        $status = [
            null => '',
            'duty' => 'Duty',
            'retire' => 'Retire',
            'study' => 'Study',
            'disable' => 'Disable',
        ];
        return view('teacher.create', ['status' => $status]);
    }

    public function store(Request $request)
    {
        $teacher = $request->all();
        $teacher['token'] = (new TokenGenerator())->generate(6);
        $teacher['password'] = password_hash($teacher['name_en'], PASSWORD_DEFAULT);
        $teacher['image'] = 1;

        $teacher = Teacher::create($teacher);

        return $teacher;
    }
}
