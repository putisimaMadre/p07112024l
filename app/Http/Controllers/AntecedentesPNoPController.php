<?php

namespace App\Http\Controllers;

use App\Models\antecedentesPNoP;
use Illuminate\Http\Request;

class AntecedentesPNoPController extends Controller
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
        $antecedentesPNoP = antecedentesPNoP::create($request->all());
        return $antecedentesPNoP;
    }

    /**
     * Display the specified resource.
     */
    public function show(antecedentesPNoP $antecedentesPNoP)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(antecedentesPNoP $antecedentesPNoP)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, antecedentesPNoP $antecedentesPNoP)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(antecedentesPNoP $antecedentesPNoP)
    {
        //
    }
}