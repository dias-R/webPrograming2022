<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class ProdutoController extends Controller
{

    function cadastro_novo(){
        return view('form');
    }

    function novo(Request $req){
        $produto = new Produto();
        $produto->nome = $req->input('nome');
        $produto->categoria = $req->input('categoria');
        $produto->preco = $req->input('preco');

        $produto->save();
        return redirect()->route('produto_listar');
    }

    function listar(){
        $produtos = Produto::all();
        return view('lista_produto', ['produtos'=> $produtos]);
    }

}
