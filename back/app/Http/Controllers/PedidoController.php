<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller{
    function index(Request $request){
        $fechaInicio = $request->get('fechaInicio');
        $fechaFin = $request->get('fechaFin');
        return Pedido::orderBy('id', 'desc')->whereBetween('fecha', [$fechaInicio, $fechaFin])->get();
    }
    function store(Request $request){
        return Pedido::create($request->all());
    }
    function update(Request $request, $id){
        $pedido = Pedido::find($id);
        $pedido->update($request->all());
        return $pedido;
    }
    function destroy($id){
        return Pedido::destroy($id);
    }
}
