<?php

namespace App\Http\Controllers;

use App\Models\EvaluacionClinicaInfantil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function edit($id)
    {
        $evaluacionClinicaInfantil = DB::table('evaluacion_clinica_infantils')
            ->where('idDatosGenerales', '=', $id)
            ->get();
        return $evaluacionClinicaInfantil;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $evaluacionClinicaInfantil = DB::table('evaluacion_clinica_infantils')
            ->where('idDatosGenerales', $request->idDatosGenerales);
        $evaluacionClinicaInfantil->update($request->all());
        return $request;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EvaluacionClinicaInfantil $evaluacionClinicaInfantil)
    {
        //
    }
}
