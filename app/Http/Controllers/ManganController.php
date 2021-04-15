<?php

namespace App\Http\Controllers;

use App\Models\Restoran;
use App\Models\Rating;

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
    
    public function pencarian()
    {
        $items = Restoran::all();
        
        return view('pages.pencarian', [
            'items' => $items
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        Rating::create($data);
        return redirect()->back();
    }
}
