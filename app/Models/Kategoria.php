<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategoria extends Model
{
    /** @use HasFactory<\Database\Factories\KategoriaFactory> */
    use HasFactory;

    protected $fillable = [
        'nev',
      
    ];

    public function receptek(){
        return $this->hasMany(Receptek::class,'kat_id');
    }
}
