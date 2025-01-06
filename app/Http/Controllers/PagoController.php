<?php

namespace App\Http\Controllers;

use App\Models\Pago;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pagos = DB::table('pagos')
        ->get();
        return $pagos;
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
        $pagos = Pago::create($request->all());
        return $pagos;
    }

    /**
     * Display the specified resource.
     */
    public function show(Pago $pago)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pago = DB::table('pagos')
            ->where('idDatosGenerales', '=', $id)
            ->get();
        return $pago;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $pago = DB::table('pagos')
            ->where('idDatosGenerales', $request->idDatosGenerales);
            $pago->update($request->all());
        return $request;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pago $pago)
    {
        //
    }
}
