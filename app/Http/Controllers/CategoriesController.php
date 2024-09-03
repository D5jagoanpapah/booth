<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(): View
    {
        $categories = Categories::all();
        return view('manage.booth_category.index', compact('categories'));
    }

    public function add(): View
    {  
        return view('manage.booth_category.add');
    }

    public function edit(Categories $category): View
    {  
        return view('manage.booth_category.edit', compact('category'));
    }

    public function insert(Request $request)
    {
        $category = new Categories();

        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();

        return redirect('booth_category')->with('success', "category update success");
    }

    function update(Categories $category, Request $request)
    {
        $category->name = $request->name;
        $category->description = $request->description;
        $category->update();

        return redirect('booth_category')->with('success', "category update success");
    }

    function destroy(Categories $category)
    {
        $category->delete();
        return redirect('booth_category')->with('success', "category deleted success");
    }
}
