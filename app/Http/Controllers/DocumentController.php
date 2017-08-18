<?php

namespace App\Http\Controllers;

use App\Document;
use App\File;
use Illuminate\Http\Request;
use App\Traits\FileTrait;

class DocumentController extends Controller
{
    use FileTrait;
    public function index()
    {
        $documents = Document::groupBy('category')
            ->show()
            ->get();

        return view('document.index');
    }

    public function create()
    {
        $status = [
            'show' => 'Show',
            'hide' => 'Hide',
        ];
        return view('document.create', ['status' => $status]);
    }

    public function edit($id)
    {
        $document = Document::findOrFail($id);
        $status = [
            'show' => 'Show',
            'hide' => 'Hide',
        ];
        return view('document.edit', ['document' => $document, 'status' => $status]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:191|unique:document',
            'description' => 'max:65534',
            'category' => 'required|max:191',
            'status' => 'required|in:show,hide',
            'file' => 'required|mimes:pdf,doc,docx',
        ]);

        $document = $request->all();
        $slug = self::handleSlug($document['name']);
        $document['slug'] = $slug;

        $file = $request->file('file');
        $file = self::storeFile($file);
        $document['file'] = $file->id;

        Document::create($document);

        return redirect()->action('AdminController@document')->with('status', 'Create Complete!');
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|max:191',
            'description' => 'max:65534',
            'category' => 'required|max:191',
            'status' => 'required|in:show,hide',
            'file' => 'mimes:pdf,doc,docx',
        ]);

        $document = Document::findOrFail($id);

        $new_document = $request->all();
        $file = $request->file('file');

        if(isset($file)){
            $file = self::storeFile($file);
            $new_document['file'] = $file->id;
        }

        $slug = self::handleSlug($new_document['name']);
        $new_document['slug'] = $slug;

        $document->update($new_document);

        return redirect()->action('AdminController@document')->with('status', 'Edit Success!');
    }

    public function destroy($id)
    {
        $document = Document::findOrFail($id);

        $file = File::findOrFail($document->file);
        self::deleteFile($file);

        $file->delete();
        $document->delete();

        return redirect()->action('AdminController@document')->with('status', 'Delete Complete');
    }

    public function handleSlug($str)
    {
        $slug = str_replace(' ', '-', $str);
        return $slug;
    }
}
