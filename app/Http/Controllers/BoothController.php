<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Booth;
use App\Models\Booth_Image;
use App\Models\BoothImage;
use App\Models\Category;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

class BoothController extends Controller
{
    public function index(): View
    {
        $booths = Booth::all();
        $categories = Category::all();
        return view('manage.booth.index', compact('booths', 'categories'));
    }

    public function add(Vendor $vendors): View
    {
        $vendors = Vendor::all();
        $categories = Category::all();
        return view('manage.booth.add', compact('vendors', 'categories'));
    }
    
    public function edit(Booth $booth)
    {
        $categories = Category::all();
        return view('manage.booth.edit', compact('booth', 'categories'));
    }

    public function insert(Request $request)
    {
        $validatedData = $request->validate([
            'vendor_id' => 'required|exists:vendors,id',
            'category_id' => 'required',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'stok' => 'required|numeric',
            'size' => 'required|string',
            'image_url' => 'array',
            'image_url.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);



        $booth = new Booth();

        $booth->vendor_id = $validatedData['vendor_id'];
        $booth->category_id = $validatedData['category_id'];
        $booth->name = $validatedData['name'];
        $booth->description = $validatedData['description'];
        $booth->price = $validatedData['price'];
        $booth->stok = $validatedData['stok'];
        $booth->size = $validatedData['size'];
        $booth->save();


        if ($request->hasFile('image_url')) {
            foreach ($request->file('image_url') as $file) {
                $booth_image = new BoothImage();
                $booth_image->booth_id = $booth->id;
                $booth_image->image_url = $file->store('booth/booth_image', 'public');
                $booth_image->save();
            }
        }

        return redirect('booth')->with('success', "booth update success");
    }

    public function update(Booth $booth, Request $request)
    {
        $validatedData = $request->validate([
            'category_id' => 'required',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'size' => 'required|string',
            'stok' => 'required|numeric',
            'image_url' => 'array',
            'image_url.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $booth->category_id = $validatedData['category_id'];
        $booth->name = $validatedData['name'];
        $booth->description = $validatedData['description'];
        $booth->price = $validatedData['price'];
        $booth->stok = $validatedData['stok'];
        $booth->size = $validatedData['size'];
        $booth->update();

        if ($request->hasFile('image_url')) {
            foreach ($request->file('image_url') as $file) {
                $booth_image = new BoothImage();
                $booth_image->booth_id = $booth->id;
                $booth_image->image_url = $file->store('booth/booth_image', 'public');
                $booth_image->save();
            }
        }

        return redirect()->back()->with('success', "image has been updated");
    }

    function destroy(Booth $booth)
    {

        $booth->delete();

        return redirect('booth')->with('success', "booth deleted success");
    }


    public function destroy_image(BoothImage $booth_image)
    {
        Storage::disk('public')->delete($booth_image->image_url);

        $booth_image->delete();

        return redirect()->back()->with('success', "image has been deleted");
    }
}
