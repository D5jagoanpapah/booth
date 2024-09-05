<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Booth;
use App\Models\Booth_Image;
use App\Models\BoothImage;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;



class BoothController extends Controller
{
    public function index(): View
    {
        $booths = Booth::all();
        return view('manage.booth.index', compact('booths'));
    }

    public function add(Vendor $vendors): View
    {
        $vendors = Vendor::all();
        return view('manage.booth.add', compact('vendors'));
    }

    public function edit(Booth $booth)
    {
        return view('manage.booth.edit', compact('booth'));
    }


    public function insert(Request $request)
    {
        // dd($request->all());
        $booth = new Booth();

        $booth->vendor_id = $request->vendor_id;
        $booth->name = $request->name;
        $booth->description = $request->description;
        $booth->price = $request->price;
        $booth->size = $request->size;
        $booth->save();

        if ($request->image_url) {
            foreach ($request->file('image_url') as $file) {
                $booth_image = new BoothImage();
                $booth_image->booth_id = $booth->id;
                $booth_image->image_url = $file->store('booth/booth_image', 'public');
                $booth_image->save();
            }
        }

        return redirect('booth')->with('success', "booth update success");
    }

    function update(Booth $booth, Request $request)
    {


        $booth->name = $request->name;
        $booth->description = $request->description;
        $booth->price = $request->price;
        $booth->size = $request->size;
        $booth->update();

        if ($request->image_url) {
            foreach ($request->file('image_url') as $file) {
                $booth_image = new BoothImage();
                $booth_image->booth_id = $booth->id;
                $booth_image->image_url = $file->store('booth/booth_image', 'public');
                $booth_image->save();
            }
        }

        return redirect()->back()->with('success', "image has been deleted");
    }

    function destroy_image(BoothImage $booth_image)
    {
        Storage::disk('public')->delete($booth_image->image_url);

        $booth_image->delete();

        return redirect()->back()->with('success', "image has been deleted");
    }
}
