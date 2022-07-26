<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propietario;

class PropietarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $propietario = Propietario::all();

        $data = ['propietarios'=>$propietario];

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
        $propietario = Propietario::create($request->all());
        return response($propietario, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $propietario = Propietario::find($id);

        if(is_null($propietario)){
            return response()->json(['mensaje' => 'No se encontro el propietario'], 404);
        }else{
            return response()->json($propietario);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $propietario = Propietario::findOrFail($id);

        $propietario->update($request->all());

        return response($propietario, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $propietario = Propietario::find($id);
        if(is_null($propietario)){
            return response()->json(['mensaje' => 'No se encontro el propietario'], 404);
        }else{
            $propietario->delete();
            return response()->json(['mensaje' => 'Propietario eliminado'], 204);
        }
    }
}