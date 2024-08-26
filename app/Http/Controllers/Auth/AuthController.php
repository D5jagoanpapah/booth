<?php

namespace App\Http\Controllers\Auth;
  
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
  

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
        
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
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
        
        $data = $request->all();
        $check = $this->create($data);
        
        return redirect("app")->withSuccess('Great! You have Successfully loggedin');
    }
    
    public function dashboard(): RedirectResponse
    {
        if(Auth::check()){
            return view('manage.manage');
        }
        
        return redirect("login")->withSuccess('Opps! You do not have access');
    }
    
    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
    
    public function logout(): RedirectResponse
    {
        Session::flush();
        Auth::logout();
        
        return redirect('login');
    }
    
}