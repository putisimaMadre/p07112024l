<?php

namespace App\Http\Controllers;

use App\Models\AnalisisFuncional;
use Illuminate\Http\Request;

class AnalisisFuncionalController extends Controller
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
        $analisisFuncional = AnalisisFuncional::create($request->all());
        return $analisisFuncional;
    }

    /**
     * Display the specified resource.
     */
    public function show(AnalisisFuncional $analisisFuncional)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AnalisisFuncional $analisisFuncional)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AnalisisFuncional $analisisFuncional)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AnalisisFuncional $analisisFuncional)
    {
        //
    }
}