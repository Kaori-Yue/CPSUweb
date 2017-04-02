<?php

namespace App\Http\Controllers;

use App\Helper\TokenGenerator;
use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

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

        $image = $request->file('image');
        $file = self::storeFile($image);
        $teacher['image'] = $file->id;

        $teacher = Teacher::create($teacher);
        return $teacher;
    }

    public function storeFile($file)
    {
        $ex = $file->getClientOriginalExtension();
        Storage::disk('local')->put($file->getFilename(). '.' . $ex, File::get($file));

        $fileRecord = [
            'name' => $file->getFilename(). '.' . $ex,
            'mime' => $file->getClientMimeType(),
            'original_name' => $file->getClientOriginalName(),
        ];

        $file = \App\File::create($fileRecord);
        return $file;
    }
}
