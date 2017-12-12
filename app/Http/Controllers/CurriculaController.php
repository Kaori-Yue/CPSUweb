<?php

namespace App\Http\Controllers;
use App\Curricula;
use App\File;
use Illuminate\Http\Request;
use App\Traits\FileTrait;

class CurriculaController extends Controller
{
    use FileTrait;
    public function index()
    {
        $b_curriculas = Curricula::enable()->where('degree', 'Bachelor Degree')->get();
        $m_curriculas = Curricula::enable()->where('degree', 'Master Degree')->get();
        $d_curriculas = Curricula::enable()->where('degree', 'Doctor Degree')->get();
        $all_curriculas = Curricula::enable()->get();


        $dis_curriculas = Curricula::disable()->get();

        return view('curricula.index2', [
            'b_curriculas' => $b_curriculas,
            'm_curriculas' => $m_curriculas,
            'd_curriculas' => $d_curriculas,
            'dis_curriculas' => $dis_curriculas,
            'all_curriculas' => $all_curriculas,
        ]);
        //return $curriculas;
    }

    public function bachelor()
    {
        $b_curriculas = Curricula::enable()->where('degree', 'Bachelor Degree')->get();
        $all_curriculas = Curricula::enable()->get();


        $dis_curriculas = Curricula::disable()->get();

        return view('curricula.bachelor', [
            'b_curriculas' => $b_curriculas,
            'dis_curriculas' => $dis_curriculas,
            'all_curriculas' => $all_curriculas,
        ]);
        //return $curriculas;
    }

    public function master()
    {
        $m_curriculas = Curricula::enable()->where('degree', 'Master Degree')->get();
        $all_curriculas = Curricula::enable()->get();


        $dis_curriculas = Curricula::disable()->get();

        return view('curricula.master', [
            'm_curriculas' => $m_curriculas,
            'dis_curriculas' => $dis_curriculas,
            'all_curriculas' => $all_curriculas,
        ]);
        //return $curriculas;
    }

    public function doctor()
    {
        $d_curriculas = Curricula::enable()->where('degree', 'Doctor Degree')->get();
        $all_curriculas = Curricula::enable()->get();


        $dis_curriculas = Curricula::disable()->get();

        return view('curricula.doctor', [
            'd_curriculas' => $d_curriculas,
            'dis_curriculas' => $dis_curriculas,
            'all_curriculas' => $all_curriculas,
        ]);
        //return $curriculas;
    }

    public function filter($filter)
    {
        $curriculas = Curricula::where('status', $filter)
            ->get();

        return view('curricula.admin', [
            'curriculas' => $curriculas
        ]);
    }

    public function create()
    {
        $status = [
            'enable' => 'ใช้งาน',
            'disable' => 'เลิกใช้งาน',
        ];
        $degree = [
            'Bachelor Degree' => 'Bachelor Degree',
            'Master Degree' => 'Master Degree',
            'Doctor Degree' => 'Doctor Degree'
        ];
        return view('curricula.create', ['degree' => $degree, 'status' => $status]);
    }

    public function edit($id)
    {
        $curricula = Curricula::findOrFail($id);
        $status = [
            'enable' => 'ใช้งาน',
            'disable' => 'เลิกใช้งาน',
        ];
        $degree = [
            'Bachelor Degree' => 'Bachelor Degree',
            'Master Degree' => 'Master Degree',
            'Doctor Degree' => 'Doctor Degree'
        ];
        return view('curricula.edit', ['curricula' => $curricula, 'degree' => $degree, 'status' => $status]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'degree' => 'required|max:191',
            'name_th' => 'required|max:191',
            'name_en' => 'required|max:191|unique:curricula',
            'degree_name_th' => 'required|max:191',
            'degree_name_en' => 'required|max:191',
            'cost' => 'required|integer|min:0',
            'credit' => 'required|integer',
            'enrollment_criteria' => 'max:65534',
            'graduation_criteria' => 'max:65534',
            'entrance_subject' => 'max:65534',
            'document' => 'max:65534',
            'status' => 'required|in:enable,disable',
            'file' => 'required|mimes:pdf,doc,docx',
        ]);

        $curricula = $request->all();
        $file = $request->file('file');
        $file = self::storeFile($file);

        $slug = self::handleSlug($curricula['name_en']);
        $curricula['slug'] = $slug;

        $curricula['file'] = $file->id;
        Curricula::create($curricula);

        return redirect()->action('AdminController@curricula')->with('status', 'Create Complete!');

    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'degree' => 'required|max:191',
            'name_th' => 'required|max:191',
            'name_en' => 'required|max:191',
            'degree_name_th' => 'required|max:191',
            'degree_name_en' => 'required|max:191',
            'cost' => 'required|integer|min:0',
            'credit' => 'required|integer',
            'enrollment_criteria' => 'max:65534',
            'graduation_criteria' => 'max:65534',
            'entrance_subject' => 'max:65534',
            'document' => 'max:65534',
            'status' => 'required|in:enable,disable',
            'file' => 'mimes:pdf,doc,docx',
        ]);

        $curricula = Curricula::findOrFail($id);

        $new_curricula = $request->all();
        $file = $request->file('file');

        if(isset($file)){
            $file = self::storeFile($file);
            $new_curricula['file'] = $file->id;
        }

        $slug = self::handleSlug($new_curricula['name_en']);
        $new_curricula['slug'] = $slug;


        $curricula->update($new_curricula);

        return redirect()->action('AdminController@curricula')->with('status', 'Edit Success!');
    }

    public function handleSlug($str)
    {
        $slug = str_replace(' ', '-', $str);
        return $slug;
    }

    public function show($slug)
    {
        $curricula = Curricula::where('slug', $slug)->firstOrFail();
        $curricula['cost'] = $english_format_number = number_format($curricula['cost']);
        return view('curricula.show2', ['curricula' => $curricula]);
    }

    public function destroy($id)
    {
        $curricula = Curricula::findOrFail($id);

        $file = File::findOrFail($curricula->file);
        self::deleteFile($file);

        $file->delete();
        $curricula->delete();

        return redirect()->action('AdminController@curricula')->with('status', 'Delete Complete!');
    }
}
