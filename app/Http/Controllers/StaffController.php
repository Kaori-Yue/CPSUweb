<?php

namespace App\Http\Controllers;
use App\Helper\TokenGenerator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Staff;

class StaffController extends Controller
{
    public function create()
    {
        $status = [
            'duty' => 'Duty',
            'disable' => 'Disable',
        ];
        return view('staff.create', ['status' => $status]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name_th' => 'required|max:191',
            'name_en' => 'required|max:191',
            'email' => 'max:191',
            'website' => 'max:191',
            'position' => 'max:191',
            'status' => 'required|in:duty,disable',
            'image' => 'required|image|mimes:jpeg,bmp,png',
        ]);

        $staff = $request->all();
        $staff['token'] = (new TokenGenerator())->generate(6);
        $staff['password'] = password_hash($staff['name_en'], PASSWORD_DEFAULT);

        $image = $request->file('image');
        $file = self::storeFile($image);
        $staff['image'] = $file->id;


        Staff::create($staff);
        return redirect()->action('AdminController@staff')->with('status', 'Create Complete!');
    }

    public function edit($id)
    {
        $staff = Staff::findOrFail($id);
        $status = [
            'duty' => 'Duty',
            'disable' => 'Disable',
        ];

        return view('staff.edit', ['status' => $status, 'staff' => $staff]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name_th' => 'required|max:191',
            'name_en' => 'required|max:191',
            'email' => 'max:191',
            'website' => 'max:191',
            'position' => 'max:191',
            'status' => 'required|in:duty,disable',
            'image' => 'image|mimes:jpeg,bmp,png',
        ]);

        $staff = Staff::findOrFail($id);
        $editedStaff = $request->all();

        $image = $request->file('image');
        if(isset($image)){
            $file = self::storeFile($image);
            $editedStaff['image'] = $file->id;
        }
        $staff->update($editedStaff);

        return redirect()->action('AdminController@staff')->with('status', 'Update Complete!');
    }

    public function destroy($id)
    {
        $staff = Staff::findOrFail($id);
        $staff->delete();

        return redirect()->action('AdminController@staff')->with('status', 'Delete Complete!');
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
