<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Puerto;

class PuertoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $puertos = Puerto::all();

        $data = ['puertos'=>$puertos];

        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $puerto = new Puerto();
        $puerto->ciudad = $request->ciudad;
        $puerto->provincia = $request->provincia;
        $puerto->pais = $request->pais;
        $puerto->ubicacion = $request->ubicacion;

        $puerto->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $puerto = Puerto::find($request->id);

        return response()->json($puerto);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $puerto = Puerto::findOrFail($request->id);

        $puerto->ciudad = $request->ciudad;
        $puerto->provincia = $request->provincia;
        $puerto->pais = $request->pais;
        $puerto->ubicacion = $request->ubicacion;

        $puerto->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $puerto = Puerto::find($request->id);
        $puerto->delete();
    }
}
