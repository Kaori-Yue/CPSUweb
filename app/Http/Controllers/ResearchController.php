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
        // Auth::loginUsingId(22);
        if (Auth::check() && Auth::user()->role == "teacher") {
            $teacher = \App\Teacher::where('user_id', '=', Auth::user()->id - 1 )->first()->id;
            $researches = Teacher::find($teacher)->researchs()->paginate(10);
            return view('research.index', ['researches' => $researches]);
        } else if (Auth::check() && Auth::user()->role == "admin") {
            return redirect()->action('AdminController@research');
        } else {
            $researches = Research::paginate(10);
            return view('research.index', ['researches' => $researches]);
        }
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
        if (Auth::check()) {
            if (Auth::user()->role == 'admin') {
                $research = Research::findOrFail($id);
                return view('research.edit', ['research' => $research]);
            } else {
                $research = Research::findOrFail($id);
                // check permission another research
                return view('research.editAsTeacher', ['research' => $research]);
            }

        }

    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'publication' => 'required',
            'owner' => 'required',
            'info' => 'required|max:65534',
        ]);
        $research = [
            'publication' => $request->publication,
            'info' => $request->info,
        ];
        $research = Research::create($research);
        if (Auth::user()->role == "admin") {
            $research->user()->attach($request->owner);
        } else {
            $research->user()->attach( \App\Teacher::where('user_id', '=', Auth::user()->id - 1 )->first()->id );
        }

        if (Auth::user()->role != "admin") {
            $login = Auth::user();
            $teacher = Teacher::where('user_id', '=', $login->id)->first();
            return redirect()->action('ResearchController@show', [$teacher->id - 1])->with('status', 'Create Complete!');
        }
        return redirect()->action('AdminController@research', ['id' => Auth::user()->id])->with('status', 'Create Complete!');
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'publication' => 'required',
            'owner' => 'required',
            'info' => 'required|max:65534',
        ]);

        $research = Research::findOrFail($id);
        $new_research = $request->all();
        $owner =  ResearchOwner::where('teacher_id', '=', $research->user()->first()->id)->where('research_id', '=', $id)->first();
        $owner->teacher_id = $request->owner;
        $owner->save();

        $research->update($new_research);
        if (Auth::user()->role != 'admin') {
            $login = Auth::user();
            $teacher = Teacher::where('user_id', '=', $login->id)->first();

            return redirect()->action('ResearchController@show', [$teacher->id - 1])->with('status', 'Update Complete!');
        }
        return redirect()->action('AdminController@research')->with('status', 'Update Complete!');
    }

    public function show($id, $order = "asc")
    {  
        $teacher = Teacher::findOrFail($id);
        $teachers = $teachers = Teacher::duty()
            ->orderBy('rank', 'desc')
            ->orderBy('name_th')
            ->get();;

        $researchs = \App\Teacher::find($id)->researchs()->orderBy('publication', 'desc')->get(); // 404
        if ($researchs == null) {
            return view('research.detail',['teacher_read' => $teacher, 'teachers' => $teachers, 'researchs' => []]);
        } else {
            return view('research.detail',['teacher_read' => $teacher, 'teachers' => $teachers, 'researchs' => $researchs]);
        }
        return dd($researchs);
        return view('research.detail',['teacher_read' => $teacher, 'teachers' => $teachers, 'researchs' => $researchs]);
    }

    public function handleSlug($str)
    {
        $slug = str_replace(' ', '-', $str);
        return $slug;
    }

    public function destroy($id)
    {
        $research = Research::findOrFail($id);
        $research->user()->detach();
        $research->delete();
        if (Auth::user()->role != "admin") {
            $login = Auth::user();
            $teacher = Teacher::where('user_id', '=', $login->id)->first();
            return redirect()->action('ResearchController@show', [$teacher->id - 1])->with('status', 'Delete Complete!');
        }

        return redirect()->action('AdminController@research')->with('status', 'Delete Complete!');
    }


    public function filter($filter = 'all')
    {
        $researches = Teacher::findOrFail($filter)->researchs()->orderBy('publication')->paginate(10);
        return view('research.index', ['researches' => $researches]);
    }

    public function createTeacher() {
        $teachers = Teacher::duty()
            ->orderBy('rank', 'desc')
            ->orderBy('name_th')
            ->pluck('name_th', 'id');
        $login = Auth::user();
        $teacher = Teacher::where('user_id', '=', $login->id)->first();
        return view('research.createTeacher', ['teachers' => $teachers, 'teacher' => $teacher]);
    }
}
