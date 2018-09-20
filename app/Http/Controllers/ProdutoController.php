<?php

namespace estoque\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Request;

class ProdutoController  extends Controller{

    public function lista(){

        $produtos = DB::select('select * from produtos');
        //return view('listagem')->with('produtos', array());
         return view('produto.listagem')->withProdutos($produtos);
        //return view('listagem', ['produtos' => $produtos]);
    }


    public function mostra($id)
    {
        $resposta = 
        DB::select('select * from produtos where id = ?', [$id]);//busca do banco
        
        if(empty($resposta)) {
            return "Esse produto não existe";
        }
        return view('produto.detalhes')->with('p', $resposta[0]);
    }
}