<?php

namespace App\Http\Controllers;

use App\Models\AntecedentesFyH;
use Illuminate\Http\Request;

class AntecedentesFyHController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $antecedentesFyH = AntecedentesFyH::create($request->all());
        return $antecedentesFyH;
        //return $request->all();
        //return $request->idDatosGenerales;
    }

    /**
     * Display the specified resource.
     */
    public function show(AntecedentesFyH $antecedentesFyH)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AntecedentesFyH $antecedentesFyH)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AntecedentesFyH $antecedentesFyH)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AntecedentesFyH $antecedentesFyH)
    {
        //
    }
}
