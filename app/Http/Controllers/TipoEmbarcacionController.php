<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipo_embarcacion;

class TipoEmbarcacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoemb = Tipo_embarcacion::all();

        $data = ['Tipo de embarcaciones'=>$tipoemb];

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
        $tipoemb = Tipo_embarcacion::create($request->all());
        return response($tipoemb, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipoemb = Tipo_embarcacion::find($id);
        if(is_null($tipoemb)){
            return response()->json(['mensaje' => 'No se encontro el tipo de embarcacion'], 404);
        }else{
            $tipoemb->delete();
            return response()->json(['mensaje' => 'tipo de embarcacion eliminado'], 204);
        }
    }
}
