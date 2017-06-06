<?php

namespace App\Http\Controllers;

use App\Helper\TokenGenerator;
use App\Staff;
use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class TeacherController extends Controller
{
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

    public function sortBy(Request $request)
    {
        $sortBy = $request->get('sort_by');

        if($sortBy == 'Rank'){
            $orderOptions = [
                'Rank' => 'SortBu: Rank',
                'ASC' => 'SortBy: ASC',
                'DESC' => 'SortBy: DESC',
            ];
            $teachers = Teacher::orderBy('rank', 'desc')
                ->orderBy('name_th')
                ->get();
        }
        elseif($sortBy == 'DESC')
        {
            $orderOptions = [
                'DESC' => 'SortBy: DESC',
                'Rank' => 'SortBy: Rank',
                'ASC' => 'SortBy: ASC',
            ];
            $teachers = Teacher::orderBy('id', 'desc')->get();
        }
        else
        {
            $orderOptions = [
                'ASC' => 'SortBy: ASC',
                'DESC' => 'SortBy: DESC',
                'Rank' => 'SortBy: Rank',
            ];
            $teachers = Teacher::orderBy('id')->get();
        }

        return view('teacher.admin', ['teachers' => $teachers, 'orderOptions' => $orderOptions]);
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
        $file = self::storeFile($image);
        $teacher['image'] = $file->id;

        $teacher['rank'] = self::handleRank($teacher);

        Teacher::create($teacher);
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
            $file = self::storeFile($image);
            $editedTeacher['image'] = $file->id;
        }
        $teacher->update($editedTeacher);

        return redirect()->action('AdminController@teacher')->with('status', 'Update Complete!');
    }

    public function destroy($id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();

        return redirect()->action('AdminController@teacher')->with('status', 'Delete Complete!');
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
