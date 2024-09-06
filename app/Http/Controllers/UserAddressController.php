<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Province;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserAddressController extends Controller
{
    function index(User $user)
    {
        $provinces = Province::all();

        return view('manage.user_address.index', compact('user', 'provinces'));
    }

    public function store(User $user, Request $request)
    {
        $request->validate([
            'province_id' => 'required|exists:provinces,id',
            'city_id' => 'required|exists:cities,id',
            'district' => 'required|string|max:255',
            'gmaps' => 'required|string',
            'address' => 'required|string|max:255',
            'postal_code' => 'required|string|max:20',
            'phone_number' => 'required|string|max:20',
        ]);

        $address = new Address();

        $address->user_id = $user->id;
        $address->province_id  = $request->province_id;
        $address->city_id = $request->city_id;
        $address->district = ucwords(strtolower($request->district));
        $address->gmaps = $request->gmaps;
        $address->address = $request->address;
        $address->postal_code = $request->postal_code;
        $address->phone_number = $request->phone_number;
        $address->is_primary = $request->is_primary ? '1' : '0';
        $address->save();

        return redirect('user')->with('success', "user update success");
    }
}
