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
        $documents = [];
        $categories = [];

        $keys = Document::select('category')->distinct()->get();
        foreach ($keys as $key){
            $temp = Document::where('category', $key['category'])
                ->show()
                ->get();
            $documents[$key['category']] = $temp;
            array_push($categories, $key['category']);
        }

        return view('document.index2', [
            'documents' => $documents,
            'categories' => $categories
        ]);
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
            'file' => 'required|mimes:docx,doc,xlsx,xls,pptx,ppt,pdf,zip,rar,7z,txt',
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
            'file' => 'mimes:docx,doc,xlsx,xls,pptx,ppt,pdf,zip,rar,7z,txt',
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

    public function category($category)
    {
        $documents = Document::where('category', $category)
            ->show()
            ->get();

        $title = $category;
        return view('document.category', ['documents' => $documents, 'title' => $title]);
    }

    public function filter($filter)
    {
        $documents = Document::where('category', $filter)
            ->paginate(12);

        return view('document.admin', ['documents' => $documents]);
    }
}
