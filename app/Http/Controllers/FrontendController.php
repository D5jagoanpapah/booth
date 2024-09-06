<?php

namespace App\Http\Controllers;

use App\Models\Booth;
use App\Models\Categories;
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
    
    public function viewpayment(Booth $booth): View
    {
        $vendors = Vendor::all();
        return view('frontend.payment.index', compact('booth'));
    }
    

    public function viewbooth(Booth $booth): View
    {   
       return view('frontend.booth.index', compact('booth')); 
    }

    public function viewboothcategory(): View
    {
        return view('frontend.booth.categories');
    }

    public function about(): View
    {
        return view('frontend.about.index');
    }
}
