<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Puerto;
use App\Models\servicioxpuerto;

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

        return response()->json($data, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $puerto = Puerto::create($request->all());
        return response($puerto, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $puerto = Puerto::find($id);
        if(is_null($puerto)){
            return response()->json(['mensaje' => 'No se encontro el puerto'], 404);
        }else{
            return response()->json($puerto);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $puerto = Puerto::find($id);

        $puerto->update($request->all());

        return response($puerto, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $puerto = Puerto::find($id);
        if(is_null($puerto)){
            return response()->json(['mensaje' => 'No se encontro el puerto'], 404);
        }else{
            $puerto->delete();
            return response()->json(['mensaje' => 'Puerto eliminado'], 204);
        }
    }
}