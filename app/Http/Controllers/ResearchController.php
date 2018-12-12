<?php

namespace App\Http\Controllers;
use App\File;
use App\Research;
use App\ResearchImage;
use Illuminate\Http\Request;
use App\Traits\FileTrait;
use App\Traits\ImageTrait;
use App\Teacher;

use App\ResearchOwner;
use App\User;
use Auth;

class ResearchController extends Controller
{
    use FileTrait, ImageTrait;
    public function index()
    {
        $research = Research::with('images')->findOrFail(19);
        return view('research.edit', ['research' => $research]);
        // $researches = Research::paginate(10);
        // return view('research.index', ['researches' => $researches]);
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
        // return dd( Auth::user() );
        // return $request . '<br>' . $request->description;
        $this->validate($request, [
            // 'file' => 'mimes:pdf,doc,docx',
            // 'name' => 'required|max:191|unique:research',
            'description' => 'required|max:65534',
            // 'owner' => 'required|max:191',
        ]);
        $research = [
            'file' => null,
            'name' => "name",
            'slug' => "slug",
            'owner' => "123",
            // 'date' => $request->date,
            'date' => "2018-12-11 08:24:41",
            'description' => $request->description,
            // 'file' => $file->id
        ];
        $research = Research::create($research);
        $research->user()->attach(Auth::user()->id);
        // $research



        // return dd($request);

        // $file = $request->file('file');
        // $file = self::storeFile($file);

        // $name = $request->get('name');
        // $slug = self::handleSlug($name);

        // $research = [
        //     'name' => $name,
        //     'slug' => $slug,
        //     'owner' => $request->get('owner'),
        //     'description' => $request->get('description'),
        //     'file' => $file->id
        // ];

        // $research = Research::create($research);

        // $keys = ['image1', 'image2', 'image3', 'image4', 'image5'];
        // $i = 1;
        // foreach ($keys as $key){
        //     $image = $request->file($key);
        //     if(isset($image)){
        //         $image = self::storeImage($image, 'normal');
        //         $research_image = [
        //             'research_id' => $research->id,
        //             'image_id' => $image->id,
        //             'name' => $request->get('name'.$i),
        //             'description' => $request->get('description'.$i)
        //         ];

        //         ResearchImage::create($research_image);
        //     }
        //     $i++;
        // }
        // $research->images;

        // return redirect()->action('AdminController@research')->with('status', 'Create Complete!');
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

        $name = $request->get('name');
        $slug = self::handleSlug($name);
        $new_research['slug'] = $slug;

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

    public function show($id, $order = "asc")
    {
        
        // return dd(Teacher::find($id));

        // $research = new Research;
        // $research->name = 'name1';
        // $research->slug = 'sname1';
        // $research->description = 'dname1';
        // $research->owner = 'oname1';

        // $research->save();

        // $teacher = Teacher::find($id);
        // $research->teachers()->attach($teacher);


        // $tmp = Research::find($id)->owners();
        // return dd($tmp);


        
        // return dd( Research::find($id)->images() );


        $teacher = Teacher::findOrFail($id);
        $teachers = $teachers = Teacher::duty()
            ->orderBy('rank', 'desc')
            ->orderBy('name_th')
            ->get();;
        // $researchs = Research::all();
        
        // $researchs = Research::paginate(10);

        // return dd( ResearchOwner::where('teacher_id', $id)->get() );
        // $researchs = [];
        // return dd ( ResearchOwner::where('teacher_id', $id)->first()->researchs() );

        // return dd ( Research::find(1)->teachers() );
        // return dd($teacher);
        // $researchsOwner = User::findOrFail($teacher->user_id)->researchs()->get();
        // return dd ($researchsOwner);
        // foreach($researchsOwner as $researchOwner) {
        //     array_push($researchs, $researchOwner);
        // }
        // return dd ($researchsOwner);
        return view('research.detail',['teacher_read' => $teacher, 'teachers' => $teachers, 'researchs' => Research::getResearch($teacher->user_id + 1, $order)]);


        // $researches = Research::findOrFail($slug);
        // return view('research.edit', ['research' => $research]);
        // return dd($researches);
        // return view('research.detail', ['research' => $researches])->render();

        // return view('name', $data)->render();
        // return dd($teacher);
        // $research = Research::where('slug', $slug)->firstOrFail();
        // return view('research.show', ['research' => $research]);
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
