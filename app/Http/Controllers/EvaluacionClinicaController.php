<?php

namespace App\Http\Controllers;

use App\Models\EvaluacionClinica;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EvaluacionClinicaController extends Controller
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
        $evaluacionClinica = EvaluacionClinica::create($request->all());
        return $evaluacionClinica;
    }

    /**
     * Display the specified resource.
     */
    public function show(EvaluacionClinica $evaluacionClinica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $evaluacionClinica = DB::table('evaluacion_clinicas')
            ->where('idDatosGenerales', '=', $id)
            ->get();
        return $evaluacionClinica;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $evaluacionClinica = DB::table('evaluacion_clinicas')
            ->where('idDatosGenerales', $request->idDatosGenerales);
        $evaluacionClinica->update($request->all());
        return $request;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EvaluacionClinica $evaluacionClinica)
    {
        //
    }
}
