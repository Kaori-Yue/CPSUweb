<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\File;
use App\Traits\FileTrait;

class FileController extends Controller
{
    use FileTrait;
    public function create()
    {
        return view('file.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'file' => 'file|mimes:docx,doc,xlsx,xls,pptx,ppt,pdf,zip',
        ]);

        $file = $request->file('file');

        self::storeFile($file);

        return redirect()->action('AdminController@file')
            ->with('status', 'Create Complete!');
    }

    public function show($id)
    {
        $image = File::findOrFail($id);
        $file = Storage::disk('local')->get($image->name);

        return response($file, 200)->header('Content-Type', $image->mime);
    }
}
