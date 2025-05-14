<?php

namespace App\Http\Controllers;

use App\Models\Receptek;
use App\Http\Requests\StoreReceptekRequest;
use App\Http\Requests\UpdateReceptekRequest;
use App\Models\Kategoria;
use Illuminate\Http\Request;

class ReceptekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $receptek = response()->json(Receptek::with('kategoria')->get());

        return $receptek;
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $recept = new Receptek();
        $recept->fill($request->all());
        $recept->save();


    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $receptek = response()->json(Receptek::with('kategoria')->find($id));

        return $receptek;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReceptekRequest $request, Receptek $receptek)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Receptek::find($id)->delete();
    }
}
