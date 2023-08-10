<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bebida;

class BebidaController extends Controller
{

    public function index()
    {
        $bebidas = Bebida::all();
        return $bebidas;
    }

    public function store(Request $request)
    {
        $bebida = new Bebida();
        $bebida->nombre = $request->nombre;
        $bebida->presentacion = $request->presentacion;
        $bebida->sabor = $request->sabor;

        $bebida->save();
        return response()->json(['id' => $bebida->id], 201);
    }

    public function show(string $id)
    {
        $bebida = Bebida::find($id);
        return $bebida;
    }

    public function update(Request $request, string $id)
    {
        $bebida = Bebida::findOrFail($request->id);
        $bebida->nombre = $request->nombre;
        $bebida->presentacion = $request->presentacion;
        $bebida->sabor = $request->sabor;

        $bebida->save();
        return $bebida;

    }

    public function destroy(string $id)
    {
        $bebida = Bebida::destroy($id);
        return $bebida;
    }
}
