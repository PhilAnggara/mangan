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

        // Σ n.f / Σ n

        $f1 = $restoran->rating->where('rating', '1');
        $f2 = $restoran->rating->where('rating', '2');
        $f3 = $restoran->rating->where('rating', '3');
        $f4 = $restoran->rating->where('rating', '4');
        $f5 = $restoran->rating->where('rating', '5');
        
        if ($f1) {
            $fn1 = $f1->sum('rating');
        }
        if ($f2) {
            $fn2 = $f2->sum('rating');
        }
        if ($f3) {
            $fn3 = $f3->sum('rating');
        }
        if ($f4) {
            $fn4 = $f4->sum('rating');
        }
        if ($f5) {
            $fn5 = $f5->sum('rating');
        }

        $Σfn = $fn1 + $fn2 + $fn3 + $fn4 + $fn5;
        $Σn = collect([1, 2, 3, 4, 5])->sum();
        
        $score = $Σfn / $Σn;
        $restoran->score = $score;
        
        $restoran->save();
        
        return redirect()->back();
    }
}
