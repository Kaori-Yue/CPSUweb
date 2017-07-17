<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Traits\ImageTrait;

class ImageController extends Controller
{
    use ImageTrait;

    public function show($id)
    {
        $image = \App\File::findOrFail($id);
        $file = Storage::disk('local')->get($image->name);

        return response($file, 200)->header('Content-Type', $image->mime);
    }

    public function thumbnail($id)
    {
        $image = \App\File::findOrFail($id);
        $file = Storage::disk('local')->get('thumb_'.$image->name);

        return response($file, 200)->header('Content-Type', $image->mime);
    }

    public function filter($filter)
    {
        $images = \App\File::where('mime', 'like', 'image%')
            ->where('mime', 'like', '%'.$filter)
            ->orderBy('id', 'desc')
            ->paginate(20);

        return view('image.admin', ['images' => $images]);
    }

    public function create()
    {
        $type = [
            'others' => 'Others',
            'profile' => 'Profile',
            'cover' => 'Cover',
        ];

        return view('image.create', ['type' => $type]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'image',
        ]);

        $file = $request->file('image');
        $type = $request->get('type');

        self::storeImage($file, $type);

        return redirect()->action('AdminController@image')
            ->with('status', 'Create Complete!');
    }

    public function edit($id)
    {
        $type = [
            'others' => 'Others',
            'profile' => 'Profile',
            'cover' => 'Cover',
        ];

        $image = \App\File::findOrFail($id);

        return view('image.edit', ['image' => $image, 'type' => $type]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'image' => 'image',
        ]);

        $file = $request->file('image');
        $type = $request->get('type');
        self::updateImage($file, $type, $id);

        return redirect()->action('AdminController@image')
            ->with('status', 'Update Complete!');
    }

    public function destroy($id)
    {
        $image = \App\File::findOrFail($id);
        self::deleteImage($image);
        $image->delete();

        return redirect()->action('AdminController@image')
            ->with('status', 'Delete Complete!');
    }
}
