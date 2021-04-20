<?php

namespace App\Http\Controllers;

use App\Models\Restoran;
use App\Models\Rating;

use Illuminate\Http\Request;

class ManganController extends Controller
{
    public function index()
    {
        $items = Restoran::paginate(15)->sortByDesc('score');
        
        return view('pages.mangan', [
            'items' => $items
        ]);
    }
    
    public function pencarian(Request $request)
    {
        if ($request->has('search')) {
            $items = Restoran::Where('nama_restoran', 'LIKE', '%'.$request->search.'%')->get()->sortByDesc('score');
        } else {
            $items = Restoran::all()->sortByDesc('score');   
        }
        
        return view('pages.pencarian', [
            'items' => $items,
            'keyword' => $request->search
        ]);
    }

    public function storeRating(Request $request)
    {
        $data = $request->all();

        Rating::create($data);

        // Score
        $id = $request->id_restoran;
        $restoran = Restoran::findOrFail($id);

        $total = $restoran->rating->sum('rating');
        $jumlah = $restoran->rating->count();
        
        if ($restoran->rating->count() != 0)
            $avg = $total / $jumlah;  
        else
            $avg = $request->rating;

        $restoran->score = $avg;
        $restoran->save();
        
        return redirect()->back();
    }
}
