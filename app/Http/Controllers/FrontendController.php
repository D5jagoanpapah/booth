<?php

namespace App\Http\Controllers;

use App\Models\Booth;
use App\Models\Vendor;
use Illuminate\View\View;
use Illuminate\Http\Request;


class FrontendController extends Controller
{
    public function index(): View
    {
        $booths = Booth::take(4)->get();;
        $vendors = Vendor::all();
        return view('frontend.home.index', compact('booths','vendors'));
    }

    public function userlog(): View
    {    
        return view('auth-user.login');
    }

    public function userregis(): View
    {    
        return view('auth-user.register');
    }

    public function viewpayment(): View
    {
        return view('frontend.payment.index');
    }

    public function viewbooth(): View
    {   
       return view('frontend.booth.index'); 
    }

    public function viewboothcategory(): View
    {
        return view('frontend.booth.categories');
    }
}
