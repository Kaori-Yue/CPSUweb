<?php

namespace App\Http\Controllers;
use App\Curricula;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class CurriculaController extends Controller
{
    public function index()
    {
        $b_curriculas = Curricula::where('degree', 'Bachelor Degree')->get();
        $m_curriculas = Curricula::where('degree', 'Master Degree')->get();
        $d_curriculas = Curricula::where('degree', 'Doctor Degree')->get();

        return view('curricula.index', [
            'b_curriculas' => $b_curriculas,
            'm_curriculas' => $m_curriculas,
            'd_curriculas' => $d_curriculas
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

    public function store(Request $request)
    {
        $curricula = $request->all();
        $file = $request->file('file');
        $file = self::storeFile($file);

        $slug = self::handleSlug($curricula['name_en']);
        $curricula['slug'] = $slug;

        $curricula['file'] = $file->id;
        $curricula = Curricula::create($curricula);

        return $curricula;
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
}
