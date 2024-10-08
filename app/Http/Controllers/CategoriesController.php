<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(): View
    {
        $categories = Category::all();
        return view('manage.booth_category.index', compact('categories'));
    }

    public function add(): View
    {
        return view('manage.booth_category.add');
    }

    public function edit(Category $category): View
    {
        return view('manage.booth_category.edit', compact('category'));
    }

    public function insert(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $category = new Category();

        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();

        return redirect('booth_category')->with('success', "category created success");
    }

    function update(Category $category, Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $category->name = $request->name;
        $category->description = $request->description;
        $category->update();

        return redirect('booth_category')->with('success', "category updated success");
    }

    function destroy(Category $category)
    {
        $category->delete();
        return redirect('booth_category')->with('success', "category deleted success");
    }
}
