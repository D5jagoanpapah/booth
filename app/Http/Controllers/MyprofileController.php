<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Province;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MyprofileController extends Controller
{
    public function index()
    {
        $provinces = Province::all();
        return view('manage.dashboard.myprofile', compact('provinces'));
    }

    public function update(Request $request)
    {
        $rules = [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . auth()->user()->id
        ];

        if ($request->hasFile('ktp_image_url')) {
            $rules['ktp_image_url'] = 'required|image|max:5120';
        }

        if ($request->password) {
            $rules['password'] = 'required|min:6';
            $rules['repeat_password'] = 'required|same:password';
        }

        $request->validate($rules);

        $user = User::find(auth()->user()->id);

        if ($file = $request->file('ktp_image_url')) {
            if ($user->user_detail->ktp_image_url != null) {
                Storage::disk('public')->delete($user->user_detail->ktp_image_url);
            }

            $user->user_detail->ktp_image_url = $file->store('/user/ktp_image', 'public');
            $user->user_detail->update();
        }

        if ($request->password) {
            $user->password = bcrypt($request->password);
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->update();

        return redirect()->back()->withSuccess('Profile berhasil di update');
    }

    public function store(Request $request)
    {
        $user_detail = new UserDetail();
        $user_detail->user_id = auth()->user()->id;
        $user_detail->save();

        if ($file = $request->file('ktp_image_url')) {
            $user_detail = new UserDetail();
            $user_detail->user_id = auth()->user()->id;
            $user_detail->ktp_image_url = $file->store('user/ktp_image', 'public');
            $user_detail->save();
        }

        $address = new Address();
        $address->user_id = auth()->user()->id;
        $address->province_id  = $request->province_id;
        $address->city_id = $request->city_id;
        $address->district = ucwords(strtolower($request->district));
        $address->gmaps = $request->gmaps;
        $address->address = $request->address;
        $address->postal_code = $request->postal_code;
        $address->phone_number = $request->contact_number;
        $address->is_primary = '1';
        $address->save();


        return redirect()->route('app.myprofile')->withSuccess('Alamat berhasil ditambahkan');
    }

    public function delete_address(Address $address)
    {
        $address->delete();

        return back()->withSuccess('Alamat berhasil dihapus');
    }
}
