<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Embarcacion;
use App\Models\Tipo_embarcacion;

class EmbarcacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $embarcacion = Embarcacion::all();

        $data = ['embarcaciones'=>$embarcacion];

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
        $id = $request->tipo_embarcacion;
        $tipoEmbarcacion = Tipo_embarcacion::find($id);
        if(is_null($tipoEmbarcacion)){
            return response()->json(['mensaje' => 'No se encontro el tipo de embarcacion'], 404);
        }else{
            $embarcacion = Embarcacion::create($request->all());
            return response($embarcacion, 201);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $embarcacion = Embarcacion::find($id);

        if(is_null($embarcacion)){
            return response()->json(['mensaje' => 'No se encontro la embarcacion'], 404);
        }else{
            return response()->json($embarcacion);
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
        $embarcacion = Embarcacion::findOrFail($id);

        $embarcacion->update($request->all());

        return response($embarcacion, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $embarcacion = Embarcacion::find($id);
        if(is_null($embarcacion)){
            return response()->json(['mensaje' => 'No se encontro la embarcacion'], 404);
        }else{
            $embarcacion->delete();
            return response()->json(['mensaje' => 'Embarcacion eliminada'], 204);
        }
    }
}
