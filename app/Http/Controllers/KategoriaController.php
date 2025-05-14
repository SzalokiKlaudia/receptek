<?php

namespace App\Http\Controllers;

use App\Models\Kategoria;
use App\Http\Requests\StoreKategoriaRequest;
use App\Http\Requests\UpdateKategoriaRequest;

class KategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategoriak = response()->json(Kategoria::all());

        return $kategoriak;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKategoriaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($kat_id)
    {
        $szurtAdat = response()->json(Kategoria::with('receptek')->find($kat_id));

        return $szurtAdat;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKategoriaRequest $request, Kategoria $kategoria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategoria $kategoria)
    {
        //
    }
}
