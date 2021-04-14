<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restoran extends Model
{
    use HasFactory;

    protected $table = 'restoran';

    protected $fillable = [
        'nama_restoran', 'slug', 'alamat', 'petunjuk', 'lokasi', 'tentang'
    ];


    protected $hidden = [
        
    ];

    public function rating(){
        return $this->hasMany(Rating::class, 'id_restoran', 'id');
    }
}
