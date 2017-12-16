<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    public function lista(){


        $produtos = DB::select('select * from produtos');


        return view('produtos.listagem')->with('produtos',$produtos);
    }
    public function mostra(){
    	$id = Request::route('id');
    	$produto = DB::select('select * from produtos where id = ?',[$id]);

    	return view('produtos.detalhes')->with('p',$produto[0]);

    }
    public function novo(){

    	return view('produtos.formulario');
    }
     public function adiciona(){
     	//pegar informacoes do form
     	$nome = Request::input('nome');
     	$quantidade = Request::input('quantidade');
     	$valor = Request::input('valor');
     	$descricao = Request::input('descricao');

     	//salvar no bd
     	DB::insert('insert into produtos (nome, quantidade, valor, descricao)
     	VALUES (?,?,?,?)',array($nome, $quantidade, $valor, $descricao));

    	return view('produtos.adicionado')->with('nome',$nome);
    }
    public function remover(){
    	$id = Request::route('id');
    	$nome = DB::select('select * from produtos where id = ?',[$id]);
		DB::delete("delete from produtos WHERE id = ?",[$id]);

    	return view('produtos.removido')->with('nome',$nome[0]->nome);
    }
    public function updateform(){
    	$id = Request::route('id');
    	$produtos = DB::select('select * from produtos where id = ?',[$id]);

		return view('produtos.formularioupdate')->with('produtos',$produtos[0]);
    }
      public function update(){
      	//pegar informacoes do form
     	$nome = Request::input('nome');
     	$quantidade = Request::input('quantidade');
     	$valor = Request::input('valor');
     	$descricao = Request::input('descricao');
    	$id = Request::input('id');

    	//salvar no bd
		DB::update("update produtos set nome = ?, quantidade = ?, valor = ?, descricao = ? where id =".$id,array($nome, $quantidade, $valor, $descricao));

    	return view('produtos.update')->with('nome',$nome);
    }
}
