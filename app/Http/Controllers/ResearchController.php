<?php

namespace App\Http\Controllers;
use App\File;
use App\Research;
use App\ResearchImage;
use Illuminate\Http\Request;
use App\Traits\FileTrait;
use App\Traits\ImageTrait;

class ResearchController extends Controller
{
    use FileTrait, ImageTrait;
    public function index()
    {
        $researches = Research::paginate(10);

        return view('research.index', ['researches' => $researches]);
    }

    public function create()
    {
        return view('research.create');
    }

    public function edit($id)
    {
        $research = Research::with('images')->findOrFail($id);
        return view('research.edit', ['research' => $research]);
        //return $research;
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'file' => 'mimes:pdf,doc,docx',
            'name' => 'required|max:191',
            'description' => 'required|max:65534',
            'owner' => 'required|max:191',
        ]);

        $file = $request->file('file');
        $file = self::storeFile($file);

        $name = $request->get('name');
        $slug = self::handleSlug($name);

        $research = [
            'name' => $name,
            'slug' => $slug,
            'owner' => $request->get('owner'),
            'description' => $request->get('description'),
            'file' => $file->id
        ];

        $research = Research::create($research);

        $keys = ['image1', 'image2', 'image3', 'image4', 'image5'];
        $i = 1;
        foreach ($keys as $key){
            $image = $request->file($key);
            if(isset($image)){
                $image = self::storeImage($image, 'normal');
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

        return redirect()->action('AdminController@research')->with('status', 'Create Complete!');
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'file' => 'mimes:pdf,doc,docx',
            'name' => 'required|max:191',
            'description' => 'required|max:65534',
            'owner' => 'required|max:191',
        ]);

        $research = Research::findOrFail($id);
        $new_research = $request->all();

        $file = $request->file('file');
        if(isset($file)){
            $file = self::storeFile($file);
            $new_research['file'] = $file->id;
        }
        $research->update($new_research);

        for ($i = 1; $i <= 5; $i++){
            if(isset($new_research['image'.$i])){
                $image = self::storeImage($new_research['image'.$i], 'normal');
                if(isset($new_research['id'.$i])){
                    $research_image = ResearchImage::where([
                        ['research_id', $research->id],
                        ['image_id', $new_research['id'.$i]]
                    ])->first();

                    $data = [
                        'research_id' => $research->id,
                        'image_id' => $image->id,
                        'name' => $new_research['name'.$i],
                        'description' => $new_research['description'.$i]
                    ];
                    $research_image->update($data);
                }else{
                    $research_image = new ResearchImage();
                    $research_image->research_id = $research->id;
                    $research_image->image_id = $image->id;
                    $research_image->name = $new_research['name'.$i];
                    $research_image->description = $new_research['description'.$i];
                    $research_image->save();
                }
            }
            else{
                if(isset($new_research['id'.$i])) {
                    $research_image = ResearchImage::where([
                        ['research_id', $research->id],
                        ['image_id', $new_research['id' . $i]]
                    ])->first();

                    $data = [
                        'research_id' => $research->id,
                        'name' => $new_research['name' . $i],
                        'description' => $new_research['description' . $i]
                    ];
                    $research_image->update($data);
                }
            }
        }
        return redirect()->action('AdminController@research')->with('status', 'Update Complete!');
        //return $new_research;
    }

    public function show($slug)
    {
        $research = Research::where('slug', $slug)->firstOrFail();
        return view('research.show', ['research' => $research]);
    }

    public function handleSlug($str)
    {
        $slug = str_replace(' ', '-', $str);
        return $slug;
    }

    public function destroy($id)
    {
        $research = Research::findOrFail($id);
        $research_images = ResearchImage::where('research_id', $research->id)->get();
        foreach ($research_images as $image){
            $image->delete();
            $file = File::findOrFail($image->image_id);
            self::deleteImage($file);
        }
        $research->delete();
        $file = File::findOrFail($research->file);
        self::deleteFile($file);

        return redirect()->action('AdminController@research')->with('status', 'Delete Complete!');
    }
}
