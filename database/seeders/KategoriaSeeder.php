<?php

namespace Database\Seeders;

use App\Models\Kategoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kategoria::create([
            'nev'=>'főétel'
        ]);

        Kategoria::create([
            'nev'=>'leves'
        ]);

        Kategoria::create([
            'nev'=>'édesség'
        ]);

        Kategoria::create([
            'nev'=>'saláta'
        ]);
    }
}
