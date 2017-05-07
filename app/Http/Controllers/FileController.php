<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\File;

class FileController extends Controller
{
    public function show($id)
    {
        $image = File::findOrFail($id);
        $file = Storage::disk('local')->get($image->name);

        return response($file, 200)->header('Content-Type', $image->mime);
    }
}
