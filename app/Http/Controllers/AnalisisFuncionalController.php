<?php

namespace App\Http\Controllers;

use App\Models\AnalisisFuncional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function edit($id)
    {
        $analisisFuncional = DB::table('analisis_funcionals')
            ->where('idDatosGenerales', '=', $id)
            ->get();
        //dd($antecedentesFyH);
        return $analisisFuncional;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $analisisFuncional = DB::table('analisis_funcionals')
            ->where('idDatosGenerales', $request->idDatosGenerales);
        $analisisFuncional->update($request->all());
        return $request;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AnalisisFuncional $analisisFuncional)
    {
        //
    }
}
