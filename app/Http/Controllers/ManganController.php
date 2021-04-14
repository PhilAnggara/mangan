<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManganController extends Controller
{
    public function index()
    {
        return view('pages.mangan');
    }
    
    // Temporary
    public function pencarian()
    {
        return view('pages.pencarian');
    }
    public function restoran()
    {
        return view('pages.restoran');
    }
}
