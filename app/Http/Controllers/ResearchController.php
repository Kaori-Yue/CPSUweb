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

        $name = $request->get('name');
        $slug = self::handleSlug($name);

        $research = [
            'name' => $name,
            'slug' => $slug,
            'description' => $request->get('description'),
            'file_id' => $file->id
        ];

        $research = Research::create($research);

        $keys = ['image1', 'image2', 'image3', 'image4', 'image5'];
        $i = 1;
        foreach ($keys as $key){
            $image = $request->file($key);
            if(isset($image)){
                $image = self::storeFile($image);
                $research_image = [
                    'research_id' => $research->id,
                    'image_id' => $image->id,
                    'name' => $request->get('name'.$i),
                    'description' => $request->get('description'.$i)
                ];

                ResearchImage::create($research_image);
            }
            $i++;
        }
        $research->images;

        return $research;
    }

    public function show($slug)
    {
        $research = Research::where('slug', $slug)->firstOrFail();
        return view('research.show', ['research' => $research]);
    }

    public function storeFile($file)
    {
        // Todo fix bug file name cannot in thai
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
}
