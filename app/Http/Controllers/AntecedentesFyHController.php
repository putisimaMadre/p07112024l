<?php

namespace App\Http\Controllers;

use App\Models\AntecedentesFyH;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Type\Integer;

class AntecedentesFyHController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $antecedentesFyH = DB::table("antecedentes_fy_h_s")->get();
        return $antecedentesFyH;
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
        $antecedentesFyH = AntecedentesFyH::create($request->all());
        return $antecedentesFyH;
        //return $request->all();
        //return $request->idDatosGenerales;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $antecedentesFyH = AntecedentesFyH::find($id);
        return $antecedentesFyH;
    }

    public function showByIdDatosGenerales(Request $request)
    {
        $antecedentesFyH = DB::table('antecedentes_fy_h_s')
            ->where('idDatosGenerales', '=', $request->get("idDatosGenerales"))
            ->get();
        return $antecedentesFyH;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $antecedentesFyH = DB::table('antecedentes_fy_h_s')
            ->where('idDatosGenerales', '=', $id)
            ->get();
        //dd($antecedentesFyH);
        return $antecedentesFyH;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        /*$antecedentesFyH = AntecedentesFyH::where('idPatologias', $request->idPatologias)
        ->where('idDatosGenerales', $request->idDatosGenerales)->get;*/
        $antecedentesFyH = DB::table('antecedentes_fy_h_s')
            ->where('idPatologias', $request->idPatologias)
            ->where('idDatosGenerales', $request->idDatosGenerales)
            ->update(['idDatosGenerales' => $request->idDatosGenerales]);

        //$antecedentesFyH->update($antecedentesFyH);
        //$antecedentesFyH::update();
        return $antecedentesFyH;
        //return $antecedentesFyH;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AntecedentesFyH $antecedentesFyH)
    {
        //
    }
}
