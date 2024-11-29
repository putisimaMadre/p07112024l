<?php

namespace App\Http\Controllers;

use App\Models\ConsentimientoInformado;
use Illuminate\Http\Request;

class ConsentimientoInformadoController extends Controller
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
        $consentimientoInformado = ConsentimientoInformado::create($request->all());
        return $consentimientoInformado;
    }

    /**
     * Display the specified resource.
     */
    public function show(ConsentimientoInformado $consentimientoInformado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ConsentimientoInformado $consentimientoInformado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ConsentimientoInformado $consentimientoInformado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ConsentimientoInformado $consentimientoInformado)
    {
        //
    }
}
