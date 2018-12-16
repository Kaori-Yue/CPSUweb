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
        // return dd (Auth::user() );
        return dd ( User::findOrFail(Auth::id())->researchs()->get() );
        if (Auth::user()->role == "teacher") {
            $researches = Teacher::findOrFail(Auth::id())->researchs()->paginate(10);
            return view('research.index', ['researches' => $researches]);
        } else if (Auth::user()->role == "admin") {

        } else {

        }



        // $researches = Research::paginate(10);
        // return view('research.index', ['researches' => $researches]);
    }

    public function create()
    {
        $teachers = Teacher::duty()
            ->orderBy('rank', 'desc')
            ->orderBy('name_th')
            ->pluck('name_th', 'id');
        return view('research.create', ['teachers' => $teachers]);
    }

    public function edit($id)
    {
        // return dd ( \App\Research::find(1)->teacher()->get() );
            $research = Research::findOrFail($id);
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
            'publication' => 'required',
            'owner' => 'required',
            'info' => 'required|max:65534',
            // 'owner' => 'required|max:191',
        ]);
        $research = [
            'publication' => $request->publication,
            'info' => $request->info,
            // 'file' => $file->id
        ];
        $research = Research::create($research);
        // return dd($research);
        if (Auth::user()->role == "admin") {
            $research->user()->attach($request->owner);
        } else {
            $research->user()->attach(Auth::user()->id);
        }
        
        
        return redirect()->action('AdminController@research', ['id' => Auth::user()->id])->with('status', 'Create Complete!');
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
            'publication' => 'required',
            'owner' => 'required',
            'info' => 'required|max:65534',
        ]);
        // return (dd($request->owner));

        $research = Research::findOrFail($id);
        $new_research = $request->all();


        $research->update($new_research);
        $research->user()->sync($request->owner);
        // return dd( $research);
        return redirect()->action('AdminController@research')->with('status', 'Update Complete!');
        //return $new_research;
    }

    public function show($id, $order = "asc")
    {  
        // return 1;
        // return dd (Research::findOrFail(1)->user()->get()   );
        
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

        // return dd ( \App\Teacher::find($id)->researchs()->get()  );


        $teacher = Teacher::findOrFail($id);
        // return  dd( $teacher );
        $teachers = $teachers = Teacher::duty()
            ->orderBy('rank', 'desc')
            ->orderBy('name_th')
            ->get();;

        $researchs = \App\Teacher::find($id)->researchs; // 404
        // $researchs = \App\Teacher::find($id)->researchs ; // 404
        // return dd($researchs);
        if ($researchs == null) {
            return view('research.detail',['teacher_read' => $teacher, 'teachers' => $teachers, 'researchs' => []]);
        } else {
            // return dd($researchs->researchs()->get());
            // $researchs = $researchs->researchs;
            $researchArr = [];
            foreach ($researchs as $key => $value) {
                // $tmp = $value->researchs;
                // return dd($tmp[0]);
                array_push($researchArr, $value->researchs[0]);
            }
            // return dd($researchArr[0]);
            return view('research.detail',['teacher_read' => $teacher, 'teachers' => $teachers, 'researchs' => $researchArr]);
        }
        return dd($researchs);
        // $researchs = Research::all();
        
        // $researchs = Research::paginate(10);

        // return dd( ResearchOwner::where('teacher_id', $id)->get() );
        // $researchs = [];
        // return dd ( ResearchOwner::where('teacher_id', $id)->first()->researchs() );

        // return dd ( Research::find(1)->teachers() );
        // return dd($teacher);
        // $researchsOwner = User::findOrFail($teacher->user_id)->researchs()->get();
        // return dd( Research::getResearch($teacher->user_id + 1, $order)  );
        // return dd ($researchsOwner);
        // foreach($researchsOwner as $researchOwner) {
        //     array_push($researchs, $researchOwner);
        // }
        // return dd ($researchsOwner);
        return view('research.detail',['teacher_read' => $teacher, 'teachers' => $teachers, 'researchs' => $researchs]);


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
        // $research = Research::findOrFail($id);
        // if (Auth::user()->role == "teacher" && Auth::user()->id == )
        // $research->delete();


        $research = Research::findOrFail($id);
        // $research_images = ResearchImage::where('research_id', $research->id)->get();
        // foreach ($research_images as $image){
        //     $image->delete();
        //     $file = File::findOrFail($image->image_id);
        //     self::deleteImage($file);
        // }
        $research->user()->detach();
        $research->delete();
        // $file = File::findOrFail($research->file);
        // self::deleteFile($file);

        return redirect()->action('AdminController@research')->with('status', 'Delete Complete!');
    }


    public function filter(Request $request, $filter)
    {
        return dd ( $request );
        return view('research.detail');
        $teacher = Teacher::findOrFail($id);
        // return  dd( $teacher );
        $teachers = $teachers = Teacher::duty()
            ->orderBy('rank', 'desc')
            ->orderBy('name_th')
            ->get();;

        $researchs = \App\Teacher::find($id)->researchs; // 404
        // $researchs = \App\Teacher::find($id)->researchs ; // 404
        // return dd($researchs);
        if ($researchs == null) {
            return view('research.detail',['teacher_read' => $teacher, 'teachers' => $teachers, 'researchs' => []]);
        } else {
            // return dd($researchs->researchs()->get());
            // $researchs = $researchs->researchs;
            $researchArr = [];
            foreach ($researchs as $key => $value) {
                // $tmp = $value->researchs;
                // return dd($tmp[0]);
                array_push($researchArr, $value->researchs[0]);
            }
            // return dd($researchArr[0]);
            return view('research.detail',['teacher_read' => $teacher, 'teachers' => $teachers, 'researchs' => $researchArr]);
        }
    }
}
