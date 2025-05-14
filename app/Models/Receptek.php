<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receptek extends Model
{
    /** @use HasFactory<\Database\Factories\ReceptekFactory> */
    use HasFactory;

    protected $fillable = [
        'nev',
        'kat_id',
        'kep_eleresi_ut',
        'leiras'
      
    ];

    public function kategoria(){
        return $this->belongsTo(Kategoria::class,'id');
    }
}
