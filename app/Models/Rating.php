<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $table = 'rating';

    protected $fillable = [
        'id_user', 'id_restoran', 'rating', 'ulasan'
    ];


    protected $hidden = [
        
    ];

    public function user(){
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
    public function resto(){
        return $this->belongsTo(Restoran::class, 'id_restoran', 'id');
    }
}
