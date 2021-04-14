<?php

namespace App\Http\Controllers;

use App\Models\Restoran;

use Illuminate\Http\Request;

class RestoranController extends Controller
{
    public function index(Request $request, $slug)
    {
        $item = Restoran::where('slug', $slug)->firstOrFail();
        $total = $item->rating->sum('rating');

        if($item->rating->count() != 0)     
            $rate = $total / $item->rating->count();  
        else     
            $rate = 0;

        return view('pages.restoran', [
            'item' => $item,
            'rate' => $rate
        ]);
    }
}
