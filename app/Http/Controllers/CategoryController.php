<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:category|max:50',
            'description' => 'required',
        ]);

        $category = $request->all();
        $slug = self::handleSlug($category['name']);

        $categoryData = [
            'title' => $category['name'],
            'slug' => $slug,
            'description' => $category['description'],
        ];
        $category = Category::create($categoryData);

        return redirect()->action('AdminController@category')
            ->with('status', 'Create Complete!');
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|unique:category|max:50',
            'description' => 'required',
        ]);

        $category = Category::findOrFail($id);
        $updateCategory = $request->all();

        $slug = self::handleSlug($updateCategory['name']);

        $categoryData = [
            'name' => $updateCategory['name'],
            'slug' => $slug,
            'description' => $updateCategory['description'],
        ];

        $category->update($categoryData);

        return redirect()->action('AdminController@category')->with('status', 'Update Complete!');
    }

    public function handleSlug($str)
    {
        $slug = str_replace(' ', '-', $str);
        return $slug;
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->action('AdminController@category')->with('status', 'Delete Complete!');
    }

}
