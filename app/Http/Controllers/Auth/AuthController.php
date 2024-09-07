<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\View\View;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Province;
use App\Models\Vendor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;


class AuthController extends Controller

{
    public function index(): View
    {
        return view('auth.login');
    }

    public function registration(): View
    {
        $provinces = Province::all();
        return view('auth.register', compact('provinces'));
    }

    public function postLogin(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $remember = $request->remember ? true : false;

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials, $remember)) {
            return redirect()->route('app.dashboard')->withSuccess('Berhasil Login');
        }

        return redirect()->route('login')->withError('Username atau Password salah');
    }

    public function postRegistration(Request $request): RedirectResponse
    {
        $rules = [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'repeat_password' => 'required|same:password',
        ];

        if ($request->register_vendor) {
            $rules['company_name'] = 'required';
            $rules['province_id'] = 'required';
            $rules['city_id'] = 'required';
            $rules['district'] = 'required';
            $rules['address'] = 'required|max:255';
            $rules['postal_code'] = 'required';
            $rules['contact_number'] = 'required|regex:/^08[0-9]{8,13}$/|unique:vendors,contact_number';
            $rules['gmaps'] = 'required';
        }

        $request->validate($rules);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->register_vendor ? 'vendor' : 'customer'
        ]);

        $user_detail = new UserDetail();
        $user_detail->user_id = $user->id;
        $user_detail->save();

        if ($request->register_vendor) {
            $address = new Address();
            $address->user_id = $user->id;
            $address->province_id  = $request->province_id;
            $address->city_id = $request->city_id;
            $address->district = ucwords(strtolower($request->district));
            $address->gmaps = $request->gmaps;
            $address->address = $request->address;
            $address->postal_code = $request->postal_code;
            $address->phone_number = $request->contact_number;
            $address->is_primary = '1';
            $address->save();

            $vendor = new Vendor();
            $vendor->user_id = $user->id;
            $vendor->company_name = $request->company_name;
            $vendor->address_id = $address->id;
            $vendor->contact_number = $request->contact_number;
            $vendor->save();
        }

        return redirect()->route('login')->withSuccess('Registrasi Berhasil Silahkan Login');
    }

    public function dashboard(): RedirectResponse
    {
        if (Auth::check()) {
            return view('manage.manage');
        }

        return redirect()->route('login')->withSuccess('Opps! You do not have access');
    }

    public function logout(): RedirectResponse
    {
        Session::flush();
        Auth::logout();

        return redirect()->route('login')->withSuccess('Berhasil Logout');
    }
}
