<?php

namespace App\Http\Controllers;

use App\Models\antecedentesPyP;
use Illuminate\Http\Request;

class AntecedentesPyPController extends Controller
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
        $antecedentesPyP = antecedentesPyP::create($request->all());
        return $antecedentesPyP;
        //return $request;
    }

    /**
     * Display the specified resource.
     */
    public function show(antecedentesPyP $antecedentesPyP)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(antecedentesPyP $antecedentesPyP)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, antecedentesPyP $antecedentesPyP)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(antecedentesPyP $antecedentesPyP)
    {
        //
    }
}
