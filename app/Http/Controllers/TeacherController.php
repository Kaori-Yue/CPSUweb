<?php

namespace App\Http\Controllers;

use App\File;
use App\Helper\TokenGenerator;
use App\Staff;
use App\Teacher;
use App\User;
use ClassesWithParents\D;
use Illuminate\Http\Request;
use App\Traits\ImageTrait2;
use Illuminate\Support\Facades\Log;
use Intervention\Image\Facades\Image;

class TeacherController extends Controller
{
    use ImageTrait2;
    public $status = [
        'duty' => 'Duty',
        'retire' => 'Retire',
        'study' => 'Study',
        'disable' => 'Disable',
    ];

    public $rank = [
        100 => 'หัวหน้าภาควิชา',
        90 => 'รองหัวหน้าภาควิชา',
        50 => 'เลขาภาควิชา',
        0 => 'อาจารย์'
    ];

    public function index()
    {
        $teachers = Teacher::duty()
            ->orderBy('rank', 'desc')
            ->orderBy('name_th')
            ->get();


        return view('teacher.index2', [
            'teachers' => $teachers,
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
        return view('teacher.create', ['status' => $this->status]);
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
        //$image = $this->base64_to_jpeg($request->get('new_image'), $image);
        $file = $this->storeImage($image, $request->get('new_image'), 'profile');
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
        $user = User::create($user);
        $teacher->user_id = $user->id;
        $teacher->save();

        return redirect()->action('AdminController@teacher')->with('status', 'Create Complete!');
    }

    public function handleRank($teacher)
    {
        if($teacher['position'] == 'หัวหน้าภาควิชา'){
            return 100;
        }
        if (strpos($teacher['position'], 'รองหัวหน้าภาควิชาฝ่าย') !== false) {
            return 85;
        }
        if (strpos($teacher['position'], 'รองหัวหน้าภาควิชา') !== false) {
            return 90;
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

        return view('teacher.edit', [
            'status' => $this->status,
            'teacher' => $teacher
        ]);
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
            $file = $this->storeImage($image, $request->get('new_image'), 'profile');
            $editedTeacher['image'] = $file->id;
        }
        $teacher->update($editedTeacher);

        return redirect()->action('AdminController@teacher')->with('status', 'Update Complete!');
        //return $request->all();
    }

    public function destroy($id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();

        $image = File::findOrFail($teacher->image);
        self::deleteImage($image);

        return redirect()->action('AdminController@teacher')->with('status', 'Delete Complete!');
    }

    public function dashboard()
    {
        return view('teacher.dashboard');
    }

    function base64_to_jpeg( $base64_string, $output_file ) {
        $ifp = fopen( $output_file, 'wb' );

        // split the string on commas
        // $data[ 0 ] == "data:image/png;base64"
        // $data[ 1 ] == <actual base64 string>
        $data = explode( ',', $base64_string );

        // we could add validation here with ensuring count( $data ) > 1
        fwrite( $ifp, base64_decode( $data[ 0 ] ) );

        fwrite( $ifp, base64_decode( $data[ 1 ] ) );

        // clean up the file resource
        fclose( $ifp );

        return $output_file;
    }


    public function show($id){
        $teacher = Teacher::findOrFail($id);
        $teachers = $teachers = Teacher::duty()
            ->orderBy('rank', 'desc')
            ->orderBy('name_th')
            ->get();;
        return view('teacher.detail',['teacher_read' => $teacher, 'teachers' => $teachers]);
    }
}
