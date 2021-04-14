<?php

namespace App\Http\Controllers;

use App\Models\Restoran;

use Illuminate\Http\Request;

class ManganController extends Controller
{
    public function index()
    {
        $items = Restoran::all();
        
        return view('pages.mangan', [
            'items' => $items
        ]);
    }
    
    // Temporary
    public function pencarian()
    {
        $items = Restoran::all();
        
        return view('pages.pencarian', [
            'items' => $items
        ]);
    }
}
