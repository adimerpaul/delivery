<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller{
    function index(){
        return Pedido::orderBy('id', 'desc')->get();
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
