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
    public function edit(EvaluacionClinica $evaluacionClinica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EvaluacionClinica $evaluacionClinica)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EvaluacionClinica $evaluacionClinica)
    {
        //
    }
}
