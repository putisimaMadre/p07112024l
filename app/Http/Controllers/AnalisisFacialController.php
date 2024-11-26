<?php

namespace App\Http\Controllers;

use App\Models\AnalisisFacial;
use Illuminate\Http\Request;

class AnalisisFacialController extends Controller
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
        $analisisFacial = AnalisisFacial::create($request->all());
        return $analisisFacial;
    }

    /**
     * Display the specified resource.
     */
    public function show(AnalisisFacial $analisisFacial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AnalisisFacial $analisisFacial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AnalisisFacial $analisisFacial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AnalisisFacial $analisisFacial)
    {
        //
    }
}
