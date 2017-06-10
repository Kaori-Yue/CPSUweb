<?php

namespace App\Http\Controllers;
use App\Curricula;
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

        $dis_curriculas = Curricula::disable()->get();

        return view('curricula.index', [
            'b_curriculas' => $b_curriculas,
            'm_curriculas' => $m_curriculas,
            'd_curriculas' => $d_curriculas,
            'dis_curriculas' => $dis_curriculas,
        ]);
        //return $curriculas;
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
            'name_en' => 'required|max:191',
            'degree_name_th' => 'required|max:191',
            'degree_name_en' => 'required|max:191',
            'cost' => 'required|integer|min:0',
            'credit' => 'required|integer',
            'enrollment_criteria' => 'required|max:65534',
            'graduation_criteria' => 'required|max:65534',
            'entrance_subject' => 'required|max:65534',
            'document' => 'required|max:65534',
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
            'enrollment_criteria' => 'required|max:65534',
            'graduation_criteria' => 'required|max:65534',
            'entrance_subject' => 'required|max:65534',
            'document' => 'required|max:65534',
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

        if($curricula->name_en != $new_curricula['name_en']){
            $slug = self::handleSlug($new_curricula['name_en']);
            $new_curricula['slug'] = $slug;
        }

        $curricula->update($new_curricula);

        return redirect()->action('AdminController@curricula')->with('status', 'Create Complete!');
    }

    public function handleSlug($str)
    {
        $slug = str_replace(' ', '-', $str);
        return $slug;
    }

    public function show($slug)
    {
        $curricula = Curricula::where('slug', $slug)->firstOrFail();
        return view('curricula.show', ['curricula' => $curricula]);
    }

    public function destroy($id)
    {
        $curricula = Curricula::findOrFail($id);
        $curricula->delete();

        return redirect()->action('AdminController@curricula')->with('status', 'Delete Complete!');
    }
}
