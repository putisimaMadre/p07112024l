<?php

namespace App\Http\Controllers;

use App\Models\PadecimientosActuales;
use Illuminate\Http\Request;

class PadecimientosActualesController extends Controller
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
        $padecimientosActuales = PadecimientosActuales::create($request->all());
        return $padecimientosActuales;
    }

    /**
     * Display the specified resource.
     */
    public function show(PadecimientosActuales $padecimientosActuales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PadecimientosActuales $padecimientosActuales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PadecimientosActuales $padecimientosActuales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PadecimientosActuales $padecimientosActuales)
    {
        //
    }
}
