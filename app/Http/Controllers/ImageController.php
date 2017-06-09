<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ImageController extends Controller
{
    public function index()
    {

    }

    public function show($id)
    {
        $image = File::findOrFail($id);
        $file = Storage::disk('local')->get($image->name);

        return response($file, 200)->header('Content-Type', $image->mime);
    }

    public function store(Request $request)
    {
        $file = $request->file('image');
        $ex = $file->getClientOriginalExtension();
        Storage::disk('local')->put($file->getFilename(). '.' . $ex, File::get($file));

        $fileRecord = [
            'name' => $file->getFilename(). '.' . $ex,
            'mime' => $file->getClientMimeType(),
            'original_name' => $file->getClientOriginalName(),
        ];

        $file = File::create($fileRecord);
        return $file;
    }
}
