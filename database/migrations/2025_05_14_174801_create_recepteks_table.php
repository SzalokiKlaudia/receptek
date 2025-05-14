<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('recepteks', function (Blueprint $table) {
            $table->id();
            $table->string('nev');
            $table->unsignedBigInteger('kat_id');
            $table->string('kep_eleresi_ut');
            $table->string('leiras');
            $table->timestamps();

            $table->foreign('kat_id')->references('id')->on('kategorias');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recepteks');
    }
};
