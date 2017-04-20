<?php

namespace App\Http\Controllers;

use App\Thesis;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ThesisController extends Controller
{
    public function index()
    {
        $thesis = Thesis::all()->take(3);
        return view('thesis.index', ['thesis' => $thesis]);
    }

    public function create()
    {
        return view('thesis.create');
    }

    public function store(Request $request)
    {
        $file = $request->file('file');
        $file = self::storeFile($file);

        $thesis = $request->all();

        $thesis['file_id'] = $file->id;

        $thesis = Thesis::create($thesis);
        return $thesis;
    }

    public function storeFile($file)
    {
        // todo fix problem "file name can only in english"
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
