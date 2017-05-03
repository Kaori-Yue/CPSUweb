<?php

namespace App\Http\Controllers;
use App\Research;
use App\ResearchImage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ResearchController extends Controller
{
    public function index()
    {
        $researches = Research::all();

        return view('research.index', ['researches' => $researches]);
    }

    public function create()
    {
        return view('research.create');
    }

    public function store(Request $request)
    {
        $file = $request->file('file');
        $file = self::storeFile($file);
        $research = [
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'file_id' => $file->id
        ];

        $research = Research::create($research);

        $keys = ['image1', 'image2', 'image3', 'image4', 'image5'];

        foreach ($keys as $key){
            $image = $request->file($key);
            if(isset($image)){
                $image = self::storeFile($image);
                $research_image = [
                    'research_id' => $research->id,
                    'image_id' => $image->id
                ];

                ResearchImage::create($research_image);
            }
        }
        $research->images;

        return $research;
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
