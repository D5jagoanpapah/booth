<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\View\View;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        return view('auth.register');
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
            return redirect()->intended('app')
                ->withSuccess('Kamu Berhasil Login');
        }

        return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
    }

    public function postRegistration(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        $user_detail = new UserDetail();
        $user_detail->user_id = $user->id;
        $user_detail->save();

        return redirect("app")->withSuccess('Great! You have Successfully loggedin');
    }

    public function dashboard(): RedirectResponse
    {
        if (Auth::check()) {
            return view('manage.manage');
        }

        return redirect("login")->withSuccess('Opps! You do not have access');
    }

    public function logout(): RedirectResponse
    {
        Session::flush();
        Auth::logout();

        return redirect('login');
    }
}
