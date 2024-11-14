<?php

namespace App\Http\Controllers;

use App\Models\Hijo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HijoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hijo = Hijo::find(2);
        /*$hijos = DB::table('hijos')
        ->get();*/
        dd($hijo->padre()->get());

        /*foreach($hijos as $hijo){
            echo $hijo->nombre;
        }*/
        
        return $hijos;
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Hijo $hijo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hijo $hijo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hijo $hijo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hijo $hijo)
    {
        //
    }
}
