<?php

namespace App\Http\Controllers;

use App\Models\PadecimientosActuales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function edit($id)
    {
        $padecimientosA = DB::table('padecimientos_actuales')
            ->where('idDatosGenerales', '=', $id)
            ->get();
        return $padecimientosA;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $padeciemientosA = DB::table('padecimientos_actuales')
            ->where('idDatosGenerales', $request->idDatosGenerales);
        $padeciemientosA->update($request->all());
        return $request;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PadecimientosActuales $padecimientosActuales)
    {
        //
    }
}
