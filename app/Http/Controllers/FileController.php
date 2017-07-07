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
            'file' => 'file|mimes:docx,doc,xlsx,xls,pptx,ppt,pdf,zip,rar,7z,txt',
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

    public function edit($id)
    {
        $file = File::findOrFail($id);
        return view('file.edit', [
            'file' => $file
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'file' => 'file|mimes:docx,doc,xlsx,xls,pptx,ppt,pdf,zip,rar,7z,txt',
        ]);

        $file = $request->file('file');
        self::updateFile($file, $id);

        return redirect()->action('AdminController@file')
            ->with('status', 'Update Complete!');
    }

    public function destroy($id)
    {
        $file = File::findOrFail($id);
        self::deleteFile($file);
        $file->delete();

        return redirect()->action('AdminController@file')
            ->with('status', 'Delete Complete !');
    }
}
