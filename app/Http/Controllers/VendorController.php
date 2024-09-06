<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\User;
use App\Models\UserDetail;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\View\View;

class VendorController extends Controller
{
    public function index(): View
    {
        $vendors = Vendor::all();
        return view('manage.vendor.index', compact('vendors'));
    }

    public function add(): View
    {
        $users = User::all();
        return view('manage.vendor.add', compact('users'));
    }

    public function edit(Vendor $vendor): View
    {
        $users = User::all();
        $addresses = Address::where('user_id', $vendor->user_id)->get();

        return view('manage.vendor.edit', compact('vendor', 'users', 'addresses'));
    }

    public function insert(Request $request)
{
    $request->validate([
        'user_id' => 'required|exists:users,id',
        'company_name' => 'required|string|max:255',
        'address_id' => 'required|exists:addresses,id',
        'contact_number' => 'required|string|max:20',
    ]);

    $vendor = new Vendor();

    $vendor->user_id = $request->user_id;
    $vendor->company_name = $request->company_name;
    $vendor->address_id = $request->address_id;
    $vendor->contact_number = $request->contact_number;
    $vendor->save();

    return redirect('vendor')->with('success', "Vendor created successfully");
}

public function update(Vendor $vendor, Request $request)
{
    $request->validate([
        'company_name' => 'required|string|max:255',
        'address_id' => 'required|exists:addresses,id',
        'contact_number' => 'required|string|max:20',
    ]);

    $vendor->company_name = $request->company_name;
    $vendor->address_id = $request->address_id;
    $vendor->contact_number = $request->contact_number;

    $vendor->update();

    return redirect('vendor')->with('success', "Vendor updated successfully");
}

    function get_address(Request $request)
    {
        $user_id = $request->user_id;
        $addresses = Address::where('user_id', $user_id)->get();

        $options = '';

        foreach ($addresses as $address) {
            $options .= '<input type="radio" class="btn-check" name="address_id" id="option2" autocomplete="off" value="' . $address->id . '">
                <label class="btn btn-outline-primary" for="option2">' . $address->address . ', ' . $address->district . ', ' . $address->city->type . '. ' .  $address->city->name . ', ' . $address->province->name . '</label>';
        }

        return response()->json([
            'success' => true,
            'data' => $options
        ]);
    }

    function destroy(Vendor $vendor)
    {

        $vendor->delete(); 
        return redirect('vendor')->with('success', "vendor update success");
    }
}
