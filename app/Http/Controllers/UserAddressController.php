<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Province;
use App\Models\User;
use Illuminate\Http\Request;

class UserAddressController extends Controller
{
    function index(User $user)
    {
        $provinces = Province::all();
        return view('manage.user_address.index', compact('user', 'provinces'));
    }

    public function store(User $user, Request $request)
    {
        $address = new Address();

        $address->user_id = $user->id;
        $address->province_id  = $request->province_id;
        $address->city_id = $request->city_id;
        $address->district = $request->district;
        $address->address = $request->address;
        $address->postal_code = $request->postal_code;
        $address->phone_number = $request->phone_number;
        $address->is_primary = $request->is_primary ? '1' : '0';
        $address->save();

        return redirect('user')->with('success', "user update success");
    }
}
