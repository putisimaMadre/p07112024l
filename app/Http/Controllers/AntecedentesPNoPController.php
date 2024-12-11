<?php

namespace App\Http\Controllers;

use App\Models\antecedentesPNoP;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function edit($id)
    {
        $antecedentesPnoP = DB::table('antecedentes_p_no_p_s')
            ->where('idDatosGenerales', '=', $id)
            ->get();
        return $antecedentesPnoP;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $antecedentesPnoP = DB::table('antecedentes_p_no_p_s')
            ->where('idDatosGenerales', $request->idDatosGenerales);
        $antecedentesPnoP->update($request->all());
        return $request;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(antecedentesPNoP $antecedentesPNoP)
    {
        //
    }
}
