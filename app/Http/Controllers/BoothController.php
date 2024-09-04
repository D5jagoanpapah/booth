<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Booth;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\View\View;


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

        return redirect('booth')->with('success', "booth update success");
    }

    function update(Booth $booth, Request $request)
    {

   
        $booth->name = $request->name;
        $booth->description = $request->description;
        $booth->price = $request->price;
        $booth->size = $request->size;
        $booth->update();

        return redirect('booth')->with('success', "booth update success");
    }

    function destroy(Booth $booth)
    {

        $booth->delete(); 
        return redirect('booth')->with('success', "booth update success");
    }
}
