<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Province;
use App\Models\User;
use App\Models\Address;
use App\Models\UserDetail;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index(): View
    {
        $users = User::all();
        return view('manage.user.index', compact('users'));
    }

    public function add(): View
    {
        return view('manage.user.add');
    }

    public function insert(Request $request)
    {
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        if ($file = $request->file('ktp_image_url')) {
            $user_detail = new UserDetail();
            $user_detail->user_id = $user->id;
            $user_detail->ktp_image_url = $file->store('user/ktp_image', 'public');
            $user_detail->save();
        }

        return redirect('user')->with('success', "user update success");
    }

    public function edit(User $user)
    {
        return view('manage.user.edit', compact('user'));
    }

    function update(User $user, Request $request)
    {
        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->password != null) {
            $user->password = $request->password;
        }

        $user->update();

        if ($file = $request->file('ktp_image_url')) {
            Storage::disk('public')->delete($user->user_detail->ktp_image_url);

            $user->user_detail->ktp_image_url = $file->store('user/ktp_image', 'public');
            $user->user_detail->update();
        }
        return redirect('user')->with('success', "users update success");
    }

    function destroy(User $user)
    {
        $user->user_detail->delete();

        Storage::disk('public')->delete($user->user_detail->ktp_image_url);

        $user->delete();

        return redirect('user')->with('success', "Product deleted success");
    }

    function get_cities(Request $request)
    {
        $province_id = $request->province_id;
        $cities = City::where('province_id', $province_id)->get();

        $options = '';

        foreach ($cities as $city) {
            $options .= '<option value="' . $city->id . '">' . $city->type . '. ' . $city->name . '</option>';
        }

        return response()->json([
            'success' => true,
            'data' => $options
        ]);
    }
}
