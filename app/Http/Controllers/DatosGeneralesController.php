<?php

namespace App\Http\Controllers;

use App\Models\DatosGenerales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatosGeneralesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datosGenerales = DB::table('datos_generales')
        ->where('status', 1)
        ->get();
        return $datosGenerales;
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
        $datosGenerales = DatosGenerales::create($request->all());
        return $datosGenerales;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $datosGenerales = DatosGenerales::find($id);
        return $datosGenerales;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $datosGenerales = DB::table('datos_generales')
            ->where('id', '=', $id)
            ->get();
        return $datosGenerales;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $datosGenerales = DatosGenerales::find($request->id);
        $datosGenerales->update($request->all());
        return $datosGenerales;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $datosGenerales = DatosGenerales::where('id', $id)
            ->orderBy('nombre')
            ->first();
            $datosGenerales->update(['status'=>0]);
        return $datosGenerales;
    }
}
