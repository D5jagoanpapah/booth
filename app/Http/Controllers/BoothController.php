<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;


class BoothController extends Controller
{
    public function index(): View
    {
        return view('manage.booth.index');
    }
}
