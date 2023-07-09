<?php

namespace App\Http\Controllers;

use App\Models\Compras;
use App\Models\produto;
use App\Models\produto_compra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class carrinhocontroller extends Controller
{
    public function inserir_produto(Request $request, $id){
        $procom = new produto_compra();
        $procom->quantidade = $request->input('quantidade');
        $procom->fk_produto_id = $id;
        $procom->fk_compra_id = session('carrinho')->id;
        $procom->save();
        return redirect()->back()->with('mensagem_sucesso','produto adicionado com sucesso');
    }
}
