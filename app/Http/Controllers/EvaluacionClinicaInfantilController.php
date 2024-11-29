<?php

namespace App\Http\Controllers;

use App\Models\EvaluacionClinicaInfantil;
use Illuminate\Http\Request;

class EvaluacionClinicaInfantilController extends Controller
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
        $evaluacionClinicaInfantil = EvaluacionClinicaInfantil::create($request->all());
        return $evaluacionClinicaInfantil;
    }

    /**
     * Display the specified resource.
     */
    public function show(EvaluacionClinicaInfantil $evaluacionClinicaInfantil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EvaluacionClinicaInfantil $evaluacionClinicaInfantil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EvaluacionClinicaInfantil $evaluacionClinicaInfantil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EvaluacionClinicaInfantil $evaluacionClinicaInfantil)
    {
        //
    }
}
